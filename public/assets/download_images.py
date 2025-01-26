import os
import requests

# List of image URLs to download
image_urls = [
    "https://www.pexels.com/search/phone%20charger/",
    "https://unsplash.com/s/photos/laptop-charger",
    "https://www.pexels.com/search/headphones/",
    "https://www.pexels.com/search/smart%20watch/",
    "https://www.freepik.com/free-photos-vectors/tablet-cover",
    "https://www.pexels.com/search/camera%20cover/",
    "https://unsplash.com/s/photos/gaming-console",
    "https://www.pexels.com/search/bluetooth%20speaker/",
    "https://www.pexels.com/search/power%20bank/",
    "https://www.pexels.com/search/wireless%20earbuds/",
    "https://unsplash.com/s/photos/usb-cable",
    "https://www.shutterstock.com/search/phone-case",
    "https://unsplash.com/s/photos/screen-protector",
    "https://www.pexels.com/search/earphone%20holder/",
    "https://www.pexels.com/search/portable%20fan/",
    "https://www.pexels.com/search/Mini%20Bluetooth%20Speaker/",
    "https://www.pexels.com/search/Charging%20docks/",
    "https://www.freepik.com/free-photos-vectors/keyboard-cover",
    "https://unsplash.com/s/photos/phone-stand",
    "https://www.pexels.com/search/car%20mount%20holder/",
    "https://www.pexels.com/search/phone%20holder/",
    "https://www.pexels.com/search/portable%20charger/",
    "https://www.pexels.com/search/led%20desk%20lamp/",
    "https://www.freepik.com/free-photos-vectors/cable-organizer",
    "https://www.freepik.com/free-photos-vectors/laptop-sleeve",
    "https://www.shutterstock.com/search/touchscreen-gloves",
    "https://www.shutterstock.com/search/charger-adapter",
    "https://www.shutterstock.com/search/led-ring-light",
    "https://www.amazon.com/Aneco-Cleaning-Headphone-Compatible-Electronics/dp/B07PTPBX7B",
    "https://www.pexels.com/search/travel%20adapter/",
    "https://www.pexels.com/search/phone%20pop%20socket/",
    "https://www.freepik.com/free-photos-vectors/bluetooth-receiver",
    "https://www.freepik.com/free-photos-vectors/aux-cable",
    "https://www.amazon.com/Cleaning-Electronic-Compatible-Earphones-Smartphones/dp/B08SVXQHCY",
    "https://www.pexels.com/search/wristband/"
]

# Directory to save images
save_dir = "c:/laragon/www/Mall_Operation/public/assets/images/products"

# Create directory if it doesn't exist
os.makedirs(save_dir, exist_ok=True)

# Download each image
for url in image_urls:
    try:
        response = requests.get(url)
        response.raise_for_status()  # Check for request errors
        filename = os.path.join(save_dir, url.split("/")[-1] + ".jpg")  # Generate filename
        with open(filename, 'wb') as f:
            f.write(response.content)
        print(f"Downloaded: {filename}")
    except Exception as e:
        print(f"Failed to download {url}: {e}")
