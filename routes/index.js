var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function (req, res, next) {
  res.render('index', {
    title: '<title>WebComet.fr - Création de site web et référencement naturel SEO - Webmaster freelance</title>',
    description: '<meta name="description" content="Vous cherchez un webmaster ou développeur web freelance pour créer votre site web ? Vous cherchez un consultant SEO pour améliorer votre référencement naturel ? Alors contactez-moi" />',
    canonical: '<link rel="canonical" href="https://webcomet.fr/">'
  });
});

module.exports = router;
