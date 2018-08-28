// CONTROLLEUR CONSULTANT-SEO

var express = require('express');
var router = express.Router();

let title = '<title>Consultant SEO à Rennes - Webmaster</title>';

let description = '<meta name="description" content="Consultant SEO" />';

let canonical = '<link rel="canonical" href="https://webcomet.fr/consultant-seo" />';


router.get('/', function (req, res, next) {
    res.render('consultant-seo', {title, description, canonical});
});

module.exports = router;