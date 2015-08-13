Ratchet Push Demo
==========

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

This is just a demo implementation of the Ratchet [push tutorial page](http://socketo.me/docs/push).

## Requirements

* Ansible `>= 1.7`
* Vagrant `>= 1.7.3`

## How to use

1. Run ` vagrant up ` and then `vagrant ssh`
1. Start the server by running `php /var/www/bin/push-server.php`
2. Open `client.html` in your browser to subscribe for notifications
3. Now open a new terminal window, run again `vagrant ssh` and then `php /var/www/bin/post.php` to generate a push notification
4. Look at the browser console to make sure push message has been received

## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.