let express = require('express');
let router = express.Router();


let title = '<title>WebComet.fr - Création de site web et référencement naturel SEO - Webmaster freelance</title>';

let description = '<meta name="description" content="Vous cherchez un webmaster ou développeur web freelance pour créer votre site web ? Vous cherchez un consultant SEO pour améliorer votre référencement naturel ? Alors contactez-moi" />';

let canonical = '<link rel="canonical" href="https://webcomet.fr/">';


router.get('/', function (req, res, next) {
  res.render('index', {title, description, canonical});
});

module.exports = router;