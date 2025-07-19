# Localization
En laravel 12 no viene la carpeta, se tiene que crear
php artisan lang:publish

Lang
Se debe tener un directorio por cada uno de los lenguajes a los que se le va a dar soporte



En app, la variable locale es la que indica al sistema con cual se va a estar trabajando

También en app, viene fallback_locale, que es cuando el idioma seteado en locale no tiene traducción

faker_locale, el idioma por defecto cuando se utilice faker

Dos formatos para utilizar

Formato vista
Formato dentro de un controlador
En ambos formatos es lo mismo se hace __('nombre_archivo.traduccion')

Para mandar un parametro es
__('welcome.greetings', ['name', 'Andres']);



El middleware del idioma debe ser especifico en web
$middleware->web(Language::class);
Porque no jala si se pone con append que aplica para todo, va en withMiddleware
