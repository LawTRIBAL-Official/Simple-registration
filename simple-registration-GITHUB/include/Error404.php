ErrorDocument 404 

RewriteEngine On
RewriteBase /

RewriteCond %{REQUEST_URI} ^/404/$
RewriteRule ^(.*)$ <.htaccess>/404.php [L]
Here,The ErrorDocument redirects all 404s to a specific URL