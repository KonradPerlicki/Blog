<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## O projekcie
Blog 


## Funkcjonalności
- Własny system rejestracji oraz logowania, można zalogować się za pomocą email lub username (wykorzystuje mutator), 
- Zalogowany użytkownik może edytować swój profil (zdjecie, nazwe uzytkownika (tylko raz na tydzień) oraz opis), 
- Przy logowaniu jest opcja przypomnienia hasła, link przychodzi na email podany i można zresetować swoje hasło,  
- Fabryka użytkowników generuje dodatkowo jednego administratora, który ma dostęp do specjalnego pulpitu,  
- Administrator ma wgląd na wszystkich użytkowników serwisu oraz może nadawac prawa do publikowania postów, lub usuwać konta,  
- Administrator ma wgląd do wszystkich postów, może je deaktywować (soft delete), lub usunąć całkowicie,
- Komentarze mają polimorficzną relację z użytkownikiem i postem (można komentować posty jak i profil danego użytkownika), admin może usuwać wszystkie posty, autor danego posta może usuwać wszystkie komentarze pod tym postem, autor komentarza może usunąć własny komentarz, 





