import time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.chrome.service import Service
from selenium.common.exceptions import TimeoutException, NoSuchElementException

webdriver_path = r"C:\Users\alden\Documents\Webdrivertest\chromedriver.exe"

chrome_options = webdriver.ChromeOptions()

service = Service(webdriver_path)

driver = webdriver.Chrome(service=service, options=chrome_options)

try:
    print("Opening the e-commerce website...")
    driver.get("https://www.saucedemo.com/")
    time.sleep(5)

    print("Logging in...")
    username = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.ID, "user-name"))
    )
    password = driver.find_element(By.ID, "password")
    login_button = driver.find_element(By.ID, "login-button")

    username.send_keys("standard_user")
    password.send_keys("secret_sauce")
    time.sleep(2)
    login_button.click()
    time.sleep(5)

    print("Verifying the product list page...")
    product_list = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.CLASS_NAME, "inventory_list"))
    )
    print("Product list is present.")
    time.sleep(5)

    print("Adding a product to the cart...")
    add_to_cart_button = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.CSS_SELECTOR, ".inventory_item button"))
    )
    add_to_cart_button.click()
    time.sleep(5)

    print("Verifying the product is added to the cart...")
    cart_badge = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.CLASS_NAME, "shopping_cart_badge"))
    )
    print("Product added to cart, cart badge:", cart_badge.text)
    time.sleep(5)

    print("Proceeding to checkout...")
    cart_button = driver.find_element(By.ID, "shopping_cart_container")
    cart_button.click()
    time.sleep(5)

    checkout_button = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.ID, "checkout"))
    )
    checkout_button.click()
    time.sleep(5)

    print("Filling in checkout details...")
    first_name = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.ID, "first-name"))
    )
    last_name = driver.find_element(By.ID, "last-name")
    postal_code = driver.find_element(By.ID, "postal-code")

    first_name.send_keys("Alden Jay")
    last_name.send_keys("Centino")
    postal_code.send_keys("102719")
    time.sleep(2)

    continue_button = driver.find_element(By.ID, "continue")
    continue_button.click()
    time.sleep(5)

    print("Completing the purchase...")
    finish_button = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.ID, "finish"))
    )
    finish_button.click()
    time.sleep(5)

  
    print("Verifying order confirmation...")
    order_confirmation_message = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.CSS_SELECTOR, ".complete-header"))
    )
    print("Order confirmation message:", order_confirmation_message.text)
    time.sleep(5)

 
    print("Logging out...")
    menu_button = driver.find_element(By.ID, "react-burger-menu-btn")
    menu_button.click()
    time.sleep(2)
    
    logout_link = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.ID, "logout_sidebar_link"))
    )
    logout_link.click()
    time.sleep(5)

except (TimeoutException, NoSuchElementException) as e:
    print("An error occurred:", e)

finally:

    print("Closing the browser...")
    driver.quit()
