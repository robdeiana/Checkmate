Salve prof., spero possa accedere correttamente al sito e al db. Dovrei aver rispettato quasi tutti i requisiti.
Il sito non è nient'altro che un ecommerce di materiale scacchistico. Purtroppo non ho fatto a tempo ad effettuare
la parte in cui l'utente compra un oggetto dal sito.

Requisiti soddisfatti:
Utilizzo di HTML e CSS 
Utilizzo di PHP e MySQL
Utilizzo del pattern MVC
Due ruoli (utente non registrato (guest) e utente registrato (user))
Funzionalità ajax (Script js/login.js e js/signup.js)
Credenziali di autenticazione e link alla homepage

Di seguito ci sono una serie di migliorie che mi ero preposto di fare:

Cifrare le password. Quando verrà effettuato il login si andrà a controllare l'hash della password.
Mancano i controlli su alcuni valori inseriti in input durante la registrazione (es. numero, cap)
Avvertire l'utente che la password dev'essere confermata correttamente (non devo più far restituire true/false, ma una keyword che mi rappresenta il tipo di errore. Così posso dire esattamente all'utente quale errore si è verificato)
Il database dovrebbe essere più complesso........
Il market dell'utente registrato dovrebbe essere dinamico, facendo vedere tutti i vari elementi in vendita. Il market dell'ospite può rimanere statico.
Il market ovrebbe essere fatto in modo che prenda solamente elementi esistenti (non statico).

