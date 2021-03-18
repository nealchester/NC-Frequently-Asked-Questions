# Documentation

NC FAQs (Frequently Asked Questions) plugin creates a custom post type to store FAQs. You can also display the entries of your choice in an accordion with a special Gutenberg block. <strong>Note:</strong> the *Advanced Custom Fields PRO* plugin is required to display the entries with a block.

## The FAQs Block

The block allows you to select answers and group them within an accordion. When a user clicks the question, the answer is revealed. The block has several features:

* Option to display a truncated answer or the full answer
* Set truncate character limit (if applicable)
* If truncated, a "read more" link will connect the user to the full post
* Set the heading type (h1-h6) supports technical SEO
* Block styling options

**Note:** Set the block the full width for best display results.

## Customize

This plugin uses your theme's single blog template file to display the question and answer. To customize the template, copy the `single.php` file and rename it `single-nc_faqs.php`.

To style the accordion, use your browser's inspector tool to play with the values of the custom properties. See an example below:

```css
.ncfaqs {
  --heading-size:1em;
  --heading-text-color:inherit;
  --heading-border:solid 1px #ddd;
  --heading-padding:0.75rem;
  --heading-p-color:inherit;
  --heading-bg-color: #fff;
  --heading-bg-color-hover:lightyellow;
  --heading-bg-color-active:#fff;
  --transition:0.5s;
  
  --content-padding:1.5rem;
  --content-bg-color:#fff;
  --content-text-color:inherit;
  --acc-space:0.75rem;         
}
```