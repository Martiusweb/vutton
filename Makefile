build:
	cd ../bootstrap/ && make
	cat style.css.header ../bootstrap/docs/assets/css/bootstrap.css > style.css
	mkdir img
	cp -R ../bootstrap/docs/assets/img/glyphicons-halflings.png img
	cp -R ../bootstrap/docs/assets/img/glyphicons-halflings-white.png img
