## xhr, ajax, fetch (text, JSON)

*The client-side (Web browser) technologies used in Web 2.0 development include Ajax* ([Wikipédia](https://en.wikipedia.org/wiki/Web_2.0#Technologies))

## démo

Petite démo pour vous montrer différentes façons de créer des requêtes asynchrones (ou Ajax, XMLHttpRequest, Fetch)

1. Le premier bouton envoi une simple requête XHR (XMLHttpRequest), encore appelée Ajax, qui récupère un contenu distant (date à l'instant T + un émoji au hasard) et l'affiche sans recharger la page.
2. Le deuxième bouton fait la même chose, mais via un Fetch faisant appel à du [async](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/async_function) ([doc](https://javascript.info/async-await))
3. Le troisième bouton fait aussi la même chose, via un Fetch, mais sans async
4. Le quatrième bouton va choper du JSON distant, et en extraire deux champs. *J'affiche tout le JSON dans la console aussi, pour info*
5. Et le cinquième bouton va choper du JSON généré par Github, et en extraire trois champs dont un lien et une image !

Enjoy !