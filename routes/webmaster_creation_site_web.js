// CONTROLLEUR WEBMASTER-CREATION-SITE-VITRINE

var express = require('express');
var router = express.Router();

let title = '<title>Webmaster Création de site vitrine à Rennes et SEO</title>';

let description = '<meta name="description" content="Création de site vitrine" />';

let canonical = '<link rel="canonical" href="https://webcomet.fr/webmaster-creation-site-vitrine" />';


router.get('/', function (req, res, next) {
    res.render('webmaster-creation-site-web', {title, description, canonical});
});

module.exports = router;