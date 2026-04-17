"""Compose an iOS-style notification banner onto notification.jpeg."""
from pathlib import Path
from PIL import Image, ImageDraw, ImageFont, ImageFilter

ROOT = Path(__file__).resolve().parent.parent
BG_PATH = ROOT / 'assets/images/notification.jpeg'
ICON_PATH = ROOT / 'assets/images/favicon/apple-touch-icon.png'
OUT_PATH = ROOT / 'assets/images/notification-event-changed.jpeg'

APP_NAME = 'The Detectory'
TIME_TEXT = 'now'
TITLE_TEXT = 'Event changed'
BODY_TEXT = "Tonight's meeting has been called off due to Terry blowing himself up"
EMOJI = '\U0001F609'

BG_COLOR = (28, 28, 30, 235)
MUTED = (174, 174, 178, 255)
WHITE = (255, 255, 255, 255)
BODY_COLOR = (235, 235, 245, 235)

FONT_DIR = Path('C:/Windows/Fonts')
font_app = ImageFont.truetype(str(FONT_DIR / 'segoeui.ttf'), 32)
font_time = ImageFont.truetype(str(FONT_DIR / 'segoeui.ttf'), 32)
font_title = ImageFont.truetype(str(FONT_DIR / 'segoeuib.ttf'), 48)
font_body = ImageFont.truetype(str(FONT_DIR / 'segoeui.ttf'), 42)
font_emoji = ImageFont.truetype(str(FONT_DIR / 'seguiemj.ttf'), 42)

bg = Image.open(BG_PATH).convert('RGBA')
W, H = bg.size

banner_w = int(W * 0.92)
banner_x = (W - banner_w) // 2
banner_y = int(H * 0.06)
radius = 56
padding_h = 44
padding_v = 36
icon_size = 100
icon_radius = 22
gap_ix = 28

text_x = banner_x + padding_h + icon_size + gap_ix
text_right = banner_x + banner_w - padding_h
text_max_w = text_right - text_x


def wrap(text, font, max_w, d):
    words = text.split()
    lines, cur = [], ''
    for w in words:
        t = (cur + ' ' + w).strip()
        if d.textlength(t, font=font) <= max_w:
            cur = t
        else:
            if cur:
                lines.append(cur)
            cur = w
    if cur:
        lines.append(cur)
    return lines


tmp = Image.new('RGBA', (1, 1))
tdraw = ImageDraw.Draw(tmp)
body_lines = wrap(BODY_TEXT, font_body, text_max_w, tdraw)
emoji_gap = 10
emoji_w = int(tdraw.textlength(EMOJI, font=font_emoji))
last_w = tdraw.textlength(body_lines[-1], font=font_body)
if last_w + emoji_gap + emoji_w > text_max_w:
    body_lines.append('')  # emoji wraps to its own line


def font_h(f, s='Ay'):
    b = f.getbbox(s)
    return b[3] - b[1]


top_row_h = max(icon_size, font_h(font_app))
gap_top_title = 18
title_h = font_h(font_title)
gap_title_body = 12
body_line_h = int(font_h(font_body) * 1.35)

banner_h = padding_v + top_row_h + gap_top_title + title_h + gap_title_body + body_line_h * len(body_lines) + padding_v

shadow_expand = 28
shadow_layer = Image.new('RGBA', (W, H), (0, 0, 0, 0))
sdraw = ImageDraw.Draw(shadow_layer)
sdraw.rounded_rectangle(
    [banner_x - shadow_expand, banner_y - shadow_expand + 14,
     banner_x + banner_w + shadow_expand, banner_y + banner_h + shadow_expand + 18],
    radius=radius + shadow_expand, fill=(0, 0, 0, 90))
shadow_layer = shadow_layer.filter(ImageFilter.GaussianBlur(radius=26))

out = Image.alpha_composite(bg, shadow_layer)

banner_layer = Image.new('RGBA', (W, H), (0, 0, 0, 0))
bdraw = ImageDraw.Draw(banner_layer)
bdraw.rounded_rectangle(
    [banner_x, banner_y, banner_x + banner_w, banner_y + banner_h],
    radius=radius, fill=BG_COLOR)
out = Image.alpha_composite(out, banner_layer)

draw = ImageDraw.Draw(out)

icon = Image.open(ICON_PATH).convert('RGBA').resize((icon_size, icon_size), Image.LANCZOS)
mask = Image.new('L', (icon_size, icon_size), 0)
mdraw = ImageDraw.Draw(mask)
mdraw.rounded_rectangle([0, 0, icon_size, icon_size], radius=icon_radius, fill=255)
icon.putalpha(mask)
icon_x = banner_x + padding_h
icon_y = banner_y + padding_v
out.paste(icon, (icon_x, icon_y), icon)

app_name_y = icon_y + (icon_size - font_h(font_app)) // 2 - 4
draw.text((text_x, app_name_y), APP_NAME, font=font_app, fill=MUTED)

time_w = draw.textlength(TIME_TEXT, font=font_time)
draw.text((text_right - time_w, app_name_y), TIME_TEXT, font=font_time, fill=MUTED)

title_y = banner_y + padding_v + top_row_h + gap_top_title
draw.text((text_x, title_y), TITLE_TEXT, font=font_title, fill=WHITE)

body_y = title_y + title_h + gap_title_body
for i, line in enumerate(body_lines):
    y = body_y + i * body_line_h
    draw.text((text_x, y), line, font=font_body, fill=BODY_COLOR)
    if i == len(body_lines) - 1:
        line_w = draw.textlength(line, font=font_body)
        ex = text_x + line_w + (emoji_gap if line else 0)
        draw.text((ex, y + 6), EMOJI, font=font_emoji, embedded_color=True)

out.convert('RGB').save(OUT_PATH, 'JPEG', quality=92, optimize=True)
print(f'saved {OUT_PATH}')
print(f'banner_h={banner_h} body_lines={len(body_lines)}')
