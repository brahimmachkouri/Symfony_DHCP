# Symfony_DHCP
A web-interfaced MAC address based DHCP


1) Install a web server like apache2
            
      apt update        //Update the repositories
      apt upgrade       //Update your packets
      apt install apache2     //Install the web service apache2
      apt install php php-xml //Installe PHP et ses dépendances
      
      
2) Configure the web service

      Apache is now installed, we are now going to edit the configuration of our virtual host. 
      
            
Puis on va créer un hôte virtuel pour y importer la configuration correcte, on se rend dans : /etc/apache2/sites-available/ et on y crée un fichier .conf et on y insère le code suivant. 

      <virtualHost *:80>
    ServerName dhcpcmi.i2m.univ-amu.fr

    DocumentRoot /var/www/dhcp/public
    <Directory "/var/www/dhcp/public/">
        AuthType Basic
        AuthName "Restricted Content"
        AuthUserFile /etc/apache2/.htpasswd
        Require valid-user
        AllowOverride None
        Order Allow,Deny
        Allow from All

        <IfModule mod_rewrite.c>
            Options -MultiViews
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^(.*)$ index.php [QSA,L]
        </IfModule>
    </Directory>

    ErrorLog /var/log/apache2/dhcp_error.log
    CustomLog /var/log/apache2/dhcp_access.log combined


    <Directory /var/www/dhcp/public/bundles>
        <IfModule mod_rewrite.c>
            RewriteEngine Off
        </IfModule>
    </Directory>

    # optionally set the value of the environment variables used in the application
    #SetEnv APP_ENV prod
    #SetEnv APP_SECRET <app-secret-id>
    #SetEnv DATABASE_URL "mysql://db_user:db_pass@host:3306/db_name"
</VirtualHost>

      


Install Symfony or clone the complete project repository

      wget https://get.symfony.com/cli/installer -O - | bash
                              or
      git clone https://github.com/yugohug0/Symfony_DHCP.git




2) Get into /dhcp/src/Controller/DhcpController.php and edit the administrator array (Users)

      public function getAdminUsers()
          {
            $users = array(
              array("name"=>"Name 1" , "value"=>"Shortcut 1"),
              array("name"=>"Name 2" , "value"=>"Shortcut 2"),
              array("name"=>"Name 3" , "value"=>"Shortcut 3"),
          );

3) 
