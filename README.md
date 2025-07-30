# AI Blog Generator / CS 85 - Assignment 12A: Intergrating Open Ai

This is a Laravel-based application that generates Ai written blog posts using the Open-AI GPT-3.5 Turbo API, based on a user submitted prompt. Open AI will then generate a multi-paragraph blog post for editing or publishing.


---

## Setup Instructions

### 1. Prerequisites
- **Windows / Mac** with PHP 8.1+ installed
- **Composer** 
- **Laravel CLI**
- **Open AI Account and Functional API Key**

### 2. Download Files
- Extract Folder once the files have downloaded.

### 3. Set Up Environment File
- Located in the main directory of the downloaded ziped folder, open the file '.env', and scroll to the very end. You should see the following code:

      # OpenAI Configuration
      OPENAI_API_KEY=your_openai_api_key_here
      OPENAI_API_URL=https://api.openai.com/v1
      OPENAI_MODEL=gpt-3.5-turbo

  - Replace 'your_openai_api_key_here' with your unique Open AI API key.
 
### 4. Run The Application WINDOWS
- Open CMD 
- Move into your Laravel project folder (type the following code into the CMD)

      cd C:\YOUR DIRECTORY\blog-ai-main

      Replace 'YOUR DIRECTORY' with the directory where your files have been saved at

- Intsall Composer through CMD. Enter the following:

      composer install

- Generate Laravel App Key through CMD, Enter the following:

      php artisan key:generate

- Start the Laravel Server by entering the following code into the CMD:

      php artisan serve

- Enter the following address into your web browser:

    http://127.0.0.1:8000/ai-form

## Troubleshooting

- If php artisan serve fails, enter the following code:

          php -S 127.0.0.1:8000 -t public

- Enter the following address into your web browser:

    http://127.0.0.1:8000/ai-form

### Site Launched

- With the site now launched, enter a prompt for Open AI to generate a blog post.


### 4. Run The Application MAC
- Open Terminal
- Move into your Laravel project folder (type the following code into the CMD)

      cd ~/Downloads/blog-ai-main  

      Replace 'YOUR DIRECTORY' with the directory where your files have been saved at

- Intsall Composer through Terminal. Enter the following:

      composer install

- Generate Laravel App Key through Terminal, Enter the following:

      php artisan key:generate

- Start the Laravel Server by entering the following code into the Terminal:

      php artisan serve

- Enter the following address into your web browser:

    http://127.0.0.1:8000/ai-form

## Troubleshooting

- If php artisan serve fails, enter the following code:

          php -S 127.0.0.1:8000 -t public

- Enter the following address into your web browser:

    http://127.0.0.1:8000/ai-form

### Site Launched

- With the site now launched, enter a prompt for Open AI to generate a blog post.

---
