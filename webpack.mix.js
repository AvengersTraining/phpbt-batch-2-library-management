const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy(
    "node_modules/admin-lte/plugins/jquery/jquery.min.js",
    "public/js/admin"
)
    .copy(
        "node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js",
        "public/js/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/select2/js/select2.full.min.js",
        "public/js/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js",
        "public/js/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js",
        "public/js/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/moment/moment.min.js",
        "public/js/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/inputmask/jquery.inputmask.min.js",
        "public/js/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js",
        "public/js/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js",
        "public/js/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
        "public/js/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js",
        "public/js/admin"
    )
    .copy("node_modules/admin-lte/dist/js/adminlte.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/jszip/jszip.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/pdfmake/pdfmake.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/pdfmake/vfs_fonts.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js", "public/js/admin")
    .copy("node_modules/admin-lte/plugins/select2/js/select2.full.min.js", "public/js/admin"),

mix.copy(
    "node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css",
    "public/css/admin"
)
    .copy(
        "node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css",
        "public/css/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
        "public/css/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css",
        "public/css/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
        "public/css/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/select2/css/select2.min.css",
        "public/css/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css",
        "public/css/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css",
        "public/css/admin"
    )
    .copy(
        "node_modules/admin-lte/dist/css/adminlte.min.css",
        "public/css/admin"
    )
    .copy(
        "node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css",
        "public/css/admin"
    )
    .copy("node_modules/admin-lte/plugins/select2/css/select2.min.css", "public/css/admin");

mix.copy(
    "node_modules/admin-lte/plugins/fontawesome-free/webfonts",
    "public/css/webfonts"
);

mix.copy("resources/js/admin/book", "public/js/admin");
mix.copy("resources/js/admin/book_titles", "public/js/admin/book_titles");
mix.copy("resources/images/admin", "public/images/admin");
mix.sass("resources/sass/admin/app.scss", "public/css/admin");
// mix for user
mix.copyDirectory("resources/css/user", "public/user/css")
    .copyDirectory("resources/js/user", "public/user/js")
    .copyDirectory("resources/images/user", "public/user/images");
