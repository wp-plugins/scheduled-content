=== Scheduled Content ===
Contributors: sahanz
Tags: scheduled content, timed, posts, content
Requires at least: 2.5
Tested up to: 3.0.4
Stable tag: 1.0

Scheduled content enables you to schedule portions of a post, for example you can show a "Buy Now" button after 3 days of post publish date, automatically :) .

== Description ==

After installing and activating the plugin you can use the shortcode [schedule]. You can pass 2 parameters, the date and the time. You have to pass at least one parameter.

Sample -

[schedule on='2011-01-04' at="13:16"]

the content you want to hide is here

[/schedule]

The 2 parameters are "on" and "at". Simply "on" accepts a date, until that date is arrived the content will be hidden, and "at" accepts a time. Time has to be set in 24hrs format and date should be yy-mm-dd If you only pass time, everyday content will be shown after that time. If you only pass a date, content will be shown on and after that specific date.

The time is compared with your blog's time zone settings, if you set your time zone to local time zone it would be easy for you. Go to "General" settings of your wordpress dashboard, under "Time Zone" you can set the time zone you prefer.



== Installation ==


1. Upload and extract `scheduled-content.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Start using the shortcode