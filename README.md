# Nexmoshop
Nexmoshop is a Magento extension that leverages the power of Nexmo platform to offer secure 2-Factor Authentication thereby providing a fully-secure online shopping experience.

Offered as a Magento extension, Nexmo adds an extra layer of security in the form of a mobile number for verification when new customers sign up on a Magento-based portal. When a user signs up, they need to enter their mobile number. Nexmoshop then uses the Nexmo APIs to generate a verification code that is sent to the user's mobile number. The user is then registered only when the user confirms the verification code recieved from Nexmo. Therefore, it helps eliminate any risk of registration by bots.

Nexmoshop uses the Number Verify capabilities offered by Nexmo and integrates into the registration module for Magento to give subscribers a fully-secure online shopping experience.

## Setup Prerequisites
1. [Magento](http://magento.com/developers/magento2)
3. [MySQL](http://www.mysql.com) is used 

## Demo Video

## Installation

1. Nexmoshop has been submitted to Magento Connect site on 15th May and should be live shortly. Till that happens, it can be installed manually by merging the contents of this repo to your Magento installation.

2. Unzip the zip file (this repo for example) and then merge the `app` and `skin` folders on your Magento server. Please do NOT overwrite these folders (instead chose the merge option to add the files in the extension to your folders)

3. Set your Nexmo developer API key & secret in the `Nexmoshop ▸ Magento ▸ app ▸ design ▸ frontend ▸ nexmoshop ▸ default ▸ template - register.phtml` file as follows

`define('NEXMO_KEY',    '583ea851');
define('NEXMO_SECRET', '76f7febe');`

That's it, you are all set to experience the Nexmoshop goodness!

## Verification

1. When you go to the registeration page for new customers, you'll now see an extra Mobile Number field.

2. Enter the verification code

Once you've entered your number, the plugin uses Nexmo's Verify Number capabilities to generate a verification code. Nexmoshop then validates your verification code to determine whether the comment should be posted or not.

    1. If the entered verification code is valid, user is registered
    
    2. If the entered verification code is invalid, the registration requeest is not processsed and the user is prompted to try again & a fresh verification code is sent to the user's phone number
    
## What next?
Nexmoshop is a demonstrator of how powerful the Nexmo platform capabilities are and how it can be integrated to enhance Magento to make it more secure. I hope the Magento Connect team approves the extension soon and I hope to enhancem Nexmoshop more powerful by adding more features.
