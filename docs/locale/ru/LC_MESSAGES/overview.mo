��    .      �              �  H   �     F     _     u     �     �     �      �  r     l   u  >   �     !  d   0  O   �  �  �     t  N   �  <   �            �   &  "   �     �  
   �     �  �   	     �	     �	     �	     
     
     
     #
     (
     1
     8
     R
  	   V
     `
  
   e
     p
  	   �
  
   �
     �
  
   �
  �  �
  H   r  (   �  "   �  1     &   9  $   `     �      �  r   �  l   1  >   �     �  d   �  O   Q  �  �     0  N   C  <   �     �     �  �   �  "   �     �     �  -   �  �   �     �     �     �     �                    "     +     2     L  	   P     Z  
   _     j  	   |  
   �     �  
   �   **//example.com/~sx/admin/auth/** **root** (login) **skeeks** (password) 1. Installation composer 2. Installation files 3. Configuring the database 4. Installation of migrations 5. Configuring the server 6. Authorization system 7. Check the working environment After a security vulnerability has been corrected, a security hotfix release will be deployed as soon as possible. But it can be reconfigured (and even necessary) in detail about this here: Server Configuration (web-server) By default, your site opens at **//example.com/frontend/web/** DB mysql ~ 5.5 Default management system is available at the following address (if desired, it can be reconfigured) Edit the file to access the database, it is located at **common/config/db.php** If the installation process has been completed, but there are still not clear to you the error, it is likely that something is wrong is configured on the server. To do so, download to /frontend/web/ and run the file to test https://github.com/skeeks-cms/cms/blob/master/requirements.php environment. //example.com/frontend/web/requirements.php or //example.com/requirements.php (depends on item 4). Installation It is important to remember to check the setting of php: **short_open_tag on** On hostings are configured by default under the usual sites. Php modules Php settings Publicly disclosing a vulnerability can put the entire community at risk. If you've discovered a security concern, please email us at support@skeeks.com. Reporting a security vulnerability Requirements SSH access Software The recommended way to install SkeekS CMS is with `Composer <http://getcomposer.org>`_. Composer is a dependency management tool for PHP that allows you to declare the dependencies your project needs and installs them into your project. Update apache curl fileinfo gd или imagik intl json mbstring mcrypt mod_rewrite apache module pdo pdo_mysql phar php >= 5.5 short_open_tag on simplexml timezonedb xml Обзор Project-Id-Version: SkeekS CMS 3.2.2
Report-Msgid-Bugs-To: 
POT-Creation-Date: 2017-02-23 13:08+0300
PO-Revision-Date: YEAR-MO-DA HO:MI+ZONE
Last-Translator: FULL NAME <EMAIL@ADDRESS>
Language: ru
Language-Team: ru <LL@li.org>
Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)
MIME-Version: 1.0
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: 8bit
Generated-By: Babel 2.3.4
 **//example.com/~sx/admin/auth/** **root** (login) **skeeks** (password) 1. Установка композера 2. Установка файлов 3. Конфигурация базы данных 4. Установка миграций 5. Настройка сервера 6. Authorization system 7. Check the working environment After a security vulnerability has been corrected, a security hotfix release will be deployed as soon as possible. But it can be reconfigured (and even necessary) in detail about this here: Server Configuration (web-server) By default, your site opens at **//example.com/frontend/web/** DB mysql ~ 5.5 Default management system is available at the following address (if desired, it can be reconfigured) Edit the file to access the database, it is located at **common/config/db.php** If the installation process has been completed, but there are still not clear to you the error, it is likely that something is wrong is configured on the server. To do so, download to /frontend/web/ and run the file to test https://github.com/skeeks-cms/cms/blob/master/requirements.php environment. //example.com/frontend/web/requirements.php or //example.com/requirements.php (depends on item 4). Установка It is important to remember to check the setting of php: **short_open_tag on** On hostings are configured by default under the usual sites. Модули php Php settings Publicly disclosing a vulnerability can put the entire community at risk. If you've discovered a security concern, please email us at support@skeeks.com. Reporting a security vulnerability Требования SSH доступ Программное обеспечение The recommended way to install SkeekS CMS is with `Composer <http://getcomposer.org>`_. Composer is a dependency management tool for PHP that allows you to declare the dependencies your project needs and installs them into your project. Update apache curl fileinfo gd или imagik intl json mbstring mcrypt mod_rewrite apache module pdo pdo_mysql phar php >= 5.5 short_open_tag on simplexml timezonedb xml Обзор 