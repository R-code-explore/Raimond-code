import qrcode
from qrcode.constants import ERROR_CORRECT_L

qr = qrcode.QRCode(
    version = 1,
    error_correction=ERROR_CORRECT_L,
    box_size=5,
    border=1
)

qr.add_data('https://raimond-code.com/')
qr.make(fit=True)

img = qr.make_image(fill_color="#104C59", back_color="white")
img.save('qrcode_raimond_code.png')