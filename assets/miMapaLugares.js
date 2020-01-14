/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict';
//Con la primera instrucción, hacemos que nuestro código no se ejecute hasta que cargue el html-->
$(()=>{

// Pedimos los datos
var nombre = $('#nombre').text();
//console.log(nombre);
var long = parseFloat($('#long').text());
//console.log(long);
var lat = parseFloat($('#lat').text());
//console.log(lat);
var alt = parseFloat($('#alt').text());
//console.log(alt);

var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
osm = L.tileLayer(osmUrl, {maxZoom: 18, attribution: osmAttrib});
var map = L.map("mapa").setView([lat, long], alt).addLayer(osm);
L.marker([lat, long])
.addTo(map)
.bindPopup(nombre)
.openPopup();
});

