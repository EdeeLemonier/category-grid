category-grid
=============

I'm working on a site to house pictures of my hometown (Biloxi, MS) for anyone who wants to download them. Most of these places were destroyed by Hurricane Katrina and most people lost most/all of their photos, as well.

I love the grid layout of Ambiance. I also wanted galleries without having to create custom post types and without using a gallery plugin (what a pain!), and I wanted to show the gallery categories in a grid layout like the grid on the homepage. Click the category and it takes you to that category's archive page.

In other words, what you see called "galleries" on the site are really just categories, and each post is just using good old JetPack. 

After much weeping and gnashing of teeth, this is how I did it. I did some piggy-backing on code/classes that were already there.If there's a cleaner way of doing it, please don't hesitate to let me know. 

I'm only going to post the page template php file here. The css is pretty simple: anywhere you see .ambiance-grid you  add .category-template. Under "site containers" (around line 439ish) you need to add .page.page-template-page_category-php .content, which is where the wearing of sackcloth and ashes came in. Took me a couple hours to realize that was why the images were too small. Ugh!

Hope this is useful!

Edee
