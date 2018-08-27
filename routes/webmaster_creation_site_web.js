var express = require('express');
var router = express.Router();

let title = '<title>Création de site web</title>';

let description = '<meta name="description" content="Création de site web" />';

let canonical = '<link rel="canonical" href="https://webcomet.fr/webmaster-creation-site-web" />';


router.get('/', function (req, res, next) {
    res.render('webmaster-creation-site-web', {title, description, canonical});
});

module.exports = router;