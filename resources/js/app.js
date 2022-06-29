import './bootstrap';
import 'flowbite';
import 'flowbite/dist/datepicker';
// import Datepicker from 'flowbite-datepicker/Datepicker';

var moment = require('moment'); // require
moment().format(); 

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
