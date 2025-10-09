# Rankola SEO - WordPress Project

## Project Overview

This is a multilingual WordPress website for **Abtinafzar Javan** (ابتین‌افزار جوان), a software development company specializing in AI, blockchain, web development, and Python training services. The project features a custom theme with bilingual support (Persian/Farsi and English) and uses custom post types for dynamic content management.

## 🏗️ Project Structure

### Core WordPress Files
- `wp-config.php` - WordPress configuration
- `index.php` - Main WordPress entry point
- `wp-admin/` - WordPress admin interface
- `wp-content/` - Themes, plugins, and uploads
- `wp-includes/` - WordPress core files

### Custom Theme: `abtinafzartheme`
Located in `wp-content/themes/abtinafzartheme/`

#### Key Theme Files
- `functions.php` - Theme functions and custom functionality
- `style.css` - Main theme stylesheet
- `header.php`, `header-en.php`, `header-fa.php` - Header templates
- `footer.php`, `footer-en.php`, `footer-fa.php` - Footer templates
- `front-page.php` - Homepage template

#### Page Templates
- `learning-en.php`, `learning-fa.php` - Learning services pages
- `ai-service-en.php`, `ai-service-fa.php` - AI services pages
- `blockchain-en.php`, `blockchain-fa.php` - Blockchain services pages
- `startup-en.php`, `startup-fa.php` - Startup consulting pages
- `template-python-private.php` - Python private training template
- `aboutus-en.php`, `aboutus-fa.php` - About us pages

#### Template Parts
- `template-parts/front-content-en.php` - English homepage content
- `template-parts/front-content-fa.php` - Persian homepage content

## 🔧 Key Functions and Features

### 1. Key-Value Management System

#### `get_key_value_url($key, $default = '#')`
**Location:** `wp-content/themes/abtinafzartheme/functions.php` (lines 66-90)

**Purpose:** Retrieves values from a custom post type called `key_values` based on a key.

**Parameters:**
- `$key` (string): The key to search for
- `$default` (mixed): Default value if key not found (default: '#')

**Returns:** String or default value

**Usage Examples:**
```php
// Contact form IDs
$contact = get_key_value_url('contact_learn_fa');
$contact = get_key_value_url('contact_ai_en');
$contact = get_key_value_url('contact_blockchain_fa');

// Service URLs
$web_url = get_key_value_url('web_develop_url_fa');
$ai_url = get_key_value_url('ai_url_en');
$blockchain_url = get_key_value_url('blockchain_url_fa');

// Button text and URLs
$url_primary = get_key_value_url('url_primary_fa', null);
$button_text = get_key_value_url('text_primary_en', null);
```

**Files Using This Function:**
- `template-python-private.php` (line 1076)
- `learning-fa.php` (line 227)
- `startup-fa.php` (line 110)
- `ai-service-en.php` (line 106)
- `blockchain-en.php` (line 239)
- `blockchain-fa.php` (line 239)
- `learning-en.php` (line 227)
- `header-en.php` (lines 66, 68)
- `header-fa.php` (lines 66, 68)
- `startup-en.php` (line 134)
- `ai-service-fa.php` (line 106)
- `template-parts/front-content-en.php` (lines 78, 89-94)
- `template-parts/front-content-fa.php` (lines 78, 89-94)

### 2. Quick Links Management System

#### `get_quickLink($name_enn, $default = [])`
**Location:** `wp-content/themes/abtinafzartheme/functions.php` (lines 97-140)

**Purpose:** Retrieves quick link data from a custom post type called `quick_links`.

**Parameters:**
- `$name_enn` (string): The English name to search for
- `$default` (array): Default values if not found

**Returns:** Array with structure:
```php
[
    'link_fa'  => 'Persian link',
    'link_en'  => 'English link', 
    'name_fa'  => 'Persian name',
    'name_en'  => 'English name'
]
```

**Usage in Footer:**
- `footer-fa.php` (lines 35-68): Displays quick links in Persian footer
- `footer-en.php` (lines 35-68): Displays quick links in English footer

**Footer Implementation:**
```php
// Fetch quick_links posts
$args = array(
    'post_type'      => 'quick_links',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$quick_links = new WP_Query($args);

// Display links
if ($quick_links->have_posts()) :
    while ($quick_links->have_posts()) : $quick_links->the_post();
        $name_en = pods_field('quick_links', get_the_ID(), 'name_fa', true);
        $link_en = pods_field('quick_links', get_the_ID(), 'link_fa', true);
        $url = esc_url(home_url($link_en));
        echo '<a href="' . $url . '" class="footer-link">→ ' . esc_html($name_en) . '</a>';
    endwhile;
endif;
```

### 3. Multilingual Support

#### Language Detection Functions
**Location:** `wp-content/themes/abtinafzartheme/functions.php` (lines 142-162)

- `custom_header()` - Loads appropriate header based on language
- `custom_footer()` - Loads appropriate footer based on language

**Language Support:**
- Persian/Farsi (`fa_IR` locale)
- English (`en_US` locale)

### 4. Custom Post Types

#### Required Custom Post Types:
1. **`key_values`** - Stores key-value pairs for dynamic content
2. **`quick_links`** - Stores navigation links for footers
3. **`student_testimonial`** - Stores student testimonials

#### Student Testimonials Function
**Location:** `wp-content/themes/abtinafzartheme/functions.php` (lines 288-297)

```php
function get_student_testimonials($number = 6)
{
    $args = array(
        'post_type' => 'student-testimonial',
        'posts_per_page' => $number,
        'orderby' => 'date',
        'order' => 'DESC',
    );
    return new WP_Query($args);
}
```

## 🎨 Styling and Assets

### CSS Files
Located in `wp-content/themes/abtinafzartheme/assets/css/`

- `fonts.css` - Custom font definitions
- `homepage.css` - Homepage styles
- `learning-en.css`, `learning-fa.css` - Learning page styles
- `ai-service-en.css`, `ai-service-fa.css` - AI service page styles
- `blockchain-en.css`, `blockchain-fa.css` - Blockchain page styles
- `startup-en.css`, `startup-fa.css` - Startup consulting styles
- `aboutus.css`, `aboutus-fa.css` - About us page styles
- `contact-page.css` - Contact page styles
- `privacy.css` - Privacy page styles

### Fonts
Located in `wp-content/themes/abtinafzartheme/assets/fonts/`
- `Vazir.woff`, `Vazir.woff2` - Persian font files
- `Vazir-Bold.woff`, `Vazir-Bold.woff2` - Bold Persian font files

### Images
Located in `wp-content/themes/abtinafzartheme/images/`
- `javad.png` - Instructor profile image
- `hero.png` - Hero section image
- Various service and feature images

## 🔌 Required Plugins

The theme requires the following plugins (managed via TGM Plugin Activation):

1. **Contact Form 7** - For contact forms
2. **Flamingo** - For storing form submissions
3. **Pods - Custom Content Types and Fields** - For custom post types and fields
4. **Polylang** - For multilingual support (inferred from usage)

## 📋 Key-Value Pairs Used in Project

### Contact Form IDs
- `contact_learn_fa` - Persian learning contact form
- `contact_learn_en` - English learning contact form
- `contact_ai_fa` - Persian AI service contact form
- `contact_ai_en` - English AI service contact form
- `contact_blockchain_fa` - Persian blockchain contact form
- `contact_blockchain_en` - English blockchain contact form
- `contact_startup_fa` - Persian startup contact form
- `contact_startup_en` - English startup contact form
- `contact_front_fa` - Persian front page contact form
- `contact_front_en` - English front page contact form

### Service URLs
- `web_develop_url_fa` - Persian web development URL
- `web_develop_url_en` - English web development URL
- `ai_url_fa` - Persian AI service URL
- `ai_url_en` - English AI service URL
- `enterprise_url_fa` - Persian enterprise URL
- `enterprise_url_en` - English enterprise URL
- `blockchain_url_fa` - Persian blockchain URL
- `blockchain_url_en` - English blockchain URL
- `consultation_startups_url_fa` - Persian startup consultation URL
- `consultation_startups_url_en` - English startup consultation URL
- `training_url_fa` - Persian training URL
- `training_url_en` - English training URL
- `python_url_fa` - Persian training URL
- `python_url_en` - English training URL

### Button Configuration
- `url_primary_fa` - Persian primary button URL
- `url_primary_en` - English primary button URL
- `text_primary_fa` - Persian primary button text
- `text_primary_en` - English primary button text

## 🚀 Quick Links System

The quick links system allows dynamic footer navigation management through the WordPress admin. Each quick link entry contains:

- **name_fa** - Persian link name
- **name_en** - English link name
- **link_fa** - Persian link URL
- **link_en** - English link URL

## 🎯 Special Features

### Python Private Training Page
- Custom template: `template-python-private.php`
- Features project showcases with difficulty levels
- Student testimonials with audio support
- Goal-based registration system
- Interactive project cards with technology tags

### Multilingual Architecture
- Separate templates for Persian and English
- Language-specific headers and footers
- RTL support for Persian content
- Dynamic language detection

### Custom Styling
- Modern gradient designs
- Responsive layouts
- Interactive animations
- Custom font integration
- Map integration for location display

## 📝 Database Configuration

- **Database Name:** `rankola`
- **Database User:** `root`
- **Host:** `localhost` (XAMPP environment)

## 🛠️ Development Environment

- **Server:** XAMPP (Windows)
- **PHP Version:** Compatible with WordPress requirements
- **WordPress Version:** Latest stable
- **Theme:** Custom `abtinafzartheme`

## 📞 Contact Information

- **Company:** ابتین‌افزار جوان (Abtinafzar Javan)
- **Founder:** محمدجواد سرلک (Mohammad Javad Sarlak)
- **Location:** اصفهان، ایران (Esfahan, Iran)
- **Services:** AI, Blockchain, Web Development, Python Training

---

*This README documents the complete structure and functionality of the Rankola SEO WordPress project, including all key-value functions and quick_links usage throughout the system.*
