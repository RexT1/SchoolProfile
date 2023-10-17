<h1 align="center" style="font-size: 30px">Website Profil Sekolah - CodeIgniter 3</h1>

## Documentation

<div style="border: 1px solid #000;">
  <img src="/assets/images/AdminPage.png" alt="Admin" />
</div>
<div style="border: 1px solid #000;">
  <img src="/assets/images/HomePage.png" alt="Home" />
</div>

## About

This project is the creation of a profile website for the East Jakarta YPMII Middle School. This project is a web application developed using CodeIgniter 3. This website has 2 different pages, namely the User page and the Administrator page. Users can access information about the school, with pages that provide information in the form of About the School, Articles, Agenda, Announcements, Gallery and Contact. Administrators can manage any information content presented on the website. There is information regarding the number of website visits and the number of article visits on the admin dashboard page.

## Server Requirements

- PHP version 5.6 or newer is recommended.
- MySQL or MariaDB
- CodeIgniter 3

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

## Available Features

- [x] Add User Page
    - [x] Home Page
    - [x] About
        - [x] Kata Sambutan Page
        - [x] Tentang Sekolah Page
        - [x] Visi dan Misi Page
    - [x] Blog Page
        - [x] Detail Articles Page
        - [x] Search Articles
        - [x] Comment Articles
    - [x] Announcements Page
    - [x] Events Page
    - [x] Gallery Page
    - [x] Contact Us Page
- [x] Add Admin Panel
    - [x] Login Page
    - [x] Dashboard Page
    - [x] Manage Users Page (Admin Only)
    - [x] Manage About School Page
    - [x] Manage Articles Page
    - [x] Manage Events Page
    - [x] Manage Announcements Page
    - [x] Manage Image Banner Home Page
    - [x] Manage Gallery Page
    - [x] Manage Inbox Page (Admin Only)
    - [x] Manage Comment Page
- [x] Add Databases
- [x] Add Routes
- [x] Add Models
- [x] Add Controllers
- [x] Add Views
- [x] Add Authentication & Multi Roles
- [x] Add CRUD Function
- [x] Add Document Template 
- [x] Add Responsive Design
- [ ] Add Realtime Comment
- [ ] Add PPDB Page

## Getting Started

Follow the instruction below to install the project locally.

## Installation

Follow the steps below for installation of this project.

1. Clone the repo.
   ```sh
   git clone git clone https://github.com/RexT1/SchoolProfile.git
   ```
2. Run your MySQL server (i'm using XAMPP).
3. Import database from `smpypmii.sql` file located at root directory.
4. Change base url in application > config > config.php line no: 26.
Example : $config['base_url'] = 'http://localhost/[your_directory]';
    ```sh
    $db['default'] = array(
        'dsn'	=> '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'your_database',
        'dbdriver' => 'mysqli',
    ```
5. Open browser with URL:
    - `http://localhost/[your_directory]/`. (User Access)
    - `http://localhost/[your_directory]/administrator`. (Administrator Access)

Note: 
- Replace [your_directory] with actual folder name where you cloned the repository.
- Replace [your_database] with actual database name where you import the database.

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/newFeature`)
3. Commit your Changes (`git commit -m 'Add some newFeature'`)
4. Push to the Branch (`git push origin feature/newFeature`)
5. Open a Pull Request

## License

Distributed under the MIT License. See `License.txt` for more information.

## Contact

If you have any questions, feel free to reach out to `Aqmal Idris` at `rivaans15@gmail.com`.

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[Admin]: /assets/images/AdminPage.png
[Home]: /assets/images/HomePage.png