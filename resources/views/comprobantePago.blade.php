<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comprobante de Pago</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<style>
    html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%
}

body {
    margin: 0
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
    display: block
}

audio,
canvas,
progress,
video {
    display: inline-block;
    vertical-align: baseline
}

audio:not([controls]) {
    display: none;
    height: 0
}

[hidden],
template {
    display: none
}

a {
    background-color: transparent
}

a:active,
a:hover {
    outline: 0
}

abbr[title] {
    border-bottom: 1px dotted
}

b,
strong {
    font-weight: bold
}

dfn {
    font-style: italic
}

h1 {
    font-size: 2em;
    margin: 0.67em 0
}

mark {
    background: #ff0;
    color: #000
}

small {
    font-size: 80%
}

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sup {
    top: -0.5em
}

sub {
    bottom: -0.25em
}

img {
    border: 0
}

svg:not(:root) {
    overflow: hidden
}

figure {
    margin: 1em 40px
}

hr {
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 0
}

pre {
    overflow: auto
}

code,
kbd,
pre,
samp {
    font-family: monospace, monospace;
    font-size: 1em
}

button,
input,
optgroup,
select,
textarea {
    color: inherit;
    font: inherit;
    margin: 0
}

button {
    overflow: visible
}

button,
select {
    text-transform: none
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer
}

button[disabled],
html input[disabled] {
    cursor: default
}

button::-moz-focus-inner,
input::-moz-focus-inner {
    border: 0;
    padding: 0
}

input {
    line-height: normal
}

input[type="checkbox"],
input[type="radio"] {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    height: auto
}

input[type="search"] {
    -webkit-appearance: textfield;
    -moz-box-sizing: content-box;
    box-sizing: content-box
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none
}

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em
}

legend {
    border: 0;
    padding: 0
}

textarea {
    overflow: auto
}

optgroup {
    font-weight: bold
}



td,
th {
    padding: 0
}

html {
    font-size: 12px;
    line-height: 1.5;
    color: #000;
    background: #ddd;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    margin: 6rem auto 0;
    max-width: 800px;
    background: white;
    border: 1px solid #aaa;
    padding: 2rem
}

.container {
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 1rem;
    padding-right: 1rem
}

*,
*:before,
*:after {
    -moz-box-sizing: inherit;
    box-sizing: inherit
}

[contenteditable]:hover,
[contenteditable]:focus,
input:hover,
input:focus {
    background: rgba(241, 76, 76, 0.1);
    outline: 1px solid #009688
}

.group:after,
.row:after,
.invoicelist-footer:after {
    content: "";
    display: table;
    clear: both
}

a {
    color: #009688;
    text-decoration: none
}

p {
    margin: 0
}

.row {
    position: relative;
    display: block;
    width: 100%;
    font-size: 0
}

.col,
.logoholder,
.me,
.info,
.bank,
[class*="col-"] {
    vertical-align: top;
    display: inline-block;
    font-size: 1rem;
    padding: 0 1rem;
    min-height: 1px
}

.col-4 {
    width: 25%
}

.col-3 {
    width: 33.33%
}

.col-2 {
    width: 18%
}


.col-1 {
    width: 100%
}

.text-center {
    text-align: center
}

.text-right {
    text-align: right
}

.control-bar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
    background: #009688;
    color: white;
    line-height: 4rem;
    height: 4rem
}

.control-bar .slogan {
    font-weight: bold;
    font-size: 1.2rem;
    display: inline-block;
    margin-right: 2rem
}

.control-bar label {
    margin-right: 1rem
}

.control-bar a {
    margin: 0;
    padding: .5em 1em;
    background: rgba(255, 255, 255, 0.8)
}

.control-bar a:hover {
    background: #fff
}

.control-bar input {
    border: none;
    background: rgba(255, 255, 255, 0.2);
    padding: .5rem 0;
    max-width: 30px;
    text-align: center
}

.control-bar input:hover {
    background: rgba(255, 255, 255, 0.3)
}

.hidetax .taxrelated {
    display: none
}

.showtax .notaxrelated {
    display: none
}

.hidedate .daterelated {
    display: none
}

.showdate .notdaterelated {
    display: none
}

header {
    margin: 1rem 0 0;
    padding: 0 0 2rem 0;
    border-bottom: 3pt solid #009688
}

header p {
    font-size: .9rem
}

header a {
    color: #000
}

.logo {
    margin: 0 auto;
    width: auto;
    height: auto;
    border: none;
    fill: #009688
}

.logoholder {
    width: 14%
}

.me {
    width: 20%
}

.info {
    width: 30%
}

.bank {
    width: 26%
}

.section {
    margin: 2rem 0 0
}

.smallme {
    display: inline-block;
    text-transform: uppercase;
    margin: 0 0 2rem 0;
    font-size: .9rem
}

.client {
    margin: 0 0 3rem 0
}

h1 {
    margin: 0;
    padding: 0;
    font-size: 2rem;
    color: #009688
}

.details input {
    display: inline;
    margin: 0 0 0 .5rem;
    border: none;
    width: 50px;
    min-width: 0;
    background: transparent;
    text-align: left
}


.invoice_detail{
	border: solid 1px #009688;
	padding:10px;
	height:25px;
	text-align:center
}

.rate:before,
.price:before,
.sum:before,
.tax:before,
#total_price:before,
#total_tax:before {
    content: '$'
}

.invoicelist-body {
    margin: 1rem
}

.invoicelist-body table {
    width: 100%
}

.invoicelist-body thead {
    text-align: left;
    border-bottom: 1pt solid #666
}

.invoicelist-body td,
.invoicelist-body th {
    position: relative;
    padding: 1rem
}

.invoicelist-body tr:nth-child(even) {
    background: #ccc
}

.invoicelist-body tr:hover .removeRow {
    display: block
}

.invoicelist-body input {
    display: inline;
    margin: 0;
    border: none;
    width: 80%;
    min-width: 0;
    background: transparent;
    text-align: left
}

.invoicelist-body .control {
    display: inline-block;
    color: white;
    background: #009688;
    padding: 3px 7px;
    font-size: .9rem;
    text-transform: uppercase;
    cursor: pointer
}

.invoicelist-body .control:hover {
    background: #f36464
}

.invoicelist-body .newRow {
    margin: .5rem 0;
    float: left
}

.invoicelist-body .removeRow {
    display: none;
    position: absolute;
    top: .1rem;
    bottom: .1rem;
    left: -1.3rem;
    font-size: .7rem;
    border-radius: 3px 0 0 3px;
    padding: .5rem
}

.invoicelist-footer {
    margin: 1rem
}

.invoicelist-footer table {
    float: right;
    width: 25%
}

.invoicelist-footer table td {
    padding: 1rem 2rem 0 1rem;
    text-align: right
}

.invoicelist-footer table tr:nth-child(2) td {
    padding-top: 0
}

.invoicelist-footer table #total_price {
    font-size: 2rem;
    color: #009688
}

.note {
    margin: 1rem
}

.hidenote .note {
    display: none
}

.note h2 {
    margin: 0;
    font-size: 1rem;
    font-weight: bold
}

footer {
    display: block;
    margin: 1rem 0;
    padding: 1rem 0 0
}

footer p {
    font-size: .8rem
}

@media print {
    html {
        margin: 0;
        padding: 0;
        background: #fff
    }
    body {
        width: 100%;
        border: none;
        background: #fff;
        color: #000;
        margin: 0;
        padding: 0
    }
    .control,
    .control-bar {
        display: none !important
    }
    [contenteditable]:hover,
    [contenteditable]:focus {
        outline: none
    }
}



</style>


<header class="row">
  <div class="logoholder text-center" >
    <img src="logo.png">
  </div><!--.logoholder-->

  <div class="me">
    <p contenteditable>
      <strong>Tienda Axes</strong><br>
      CL. 51 #73 - 134<br>
      Medellín, Antioquia.<br>
    </p>
  </div><!--.me-->

  <div class="info">
    <p contenteditable>
      Web: <a href="http://volkerotto.net">www.tiendaaxes.com</a><br>
      E-mail: <a href="mailto:info@obedalvarado.pw">axesskateboarding@gmail.com</a><br>
      Tel: +57 301 6729248<br>
    </p>
  </div><!-- .info -->

  <div class="bank">
   
  @if($pedidos!=null)
   @foreach($pedidos as $pedido)
   <div>
   
    <p contenteditable>
    Factura #: {{$pedido->Id_Pedido}}<br>
    Nombre Cliente: {{$usuario->name}} {{$usuario->apellido}}<br>
    Documento: {{$usuario->identificacion}}<br>
    Fecha: {{$pedido->Fecha}}<br>
    @break;

    </php>
  
   </div> 

    @endforeach
    @endif
  </div><!--.bank-->

</header>




<div class="row section">

<div class="col-2">
    <h1 contenteditable>Factura</h1>
  </div><!--.col-->

</div><!--.row-->
<br>
<br>
<br>

<div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="pro-thumbnail">Id Pedido</th>
                            <th class="pro-title">Productos</th>
                            <th class="pro-title">Cantidad</th>
                            <th class="pro-title">Talla</th>
                            <th class="pro-title">Pago</th>
                            <th class="pro-title">Direccion</th>
                            <th class="pro-title">Valor</th>
                            <th class="pro-title">Fecha</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($pedidos!=null)
                           @foreach($pedidos as $pedido)

                           
                           <tr>
                               <td>{{$pedido->Id_Pedido}}</td>
                              
                               <td>
                                   @foreach ($productos as $p)
                                      @if($p->id == $pedido->id_producto)
                                       {{$p->nombre}}
                                      @endif 
                                   @endforeach
                                </td>
                                <td>
                                   @foreach($pedidosT as $pedidosDb)
                                   @if ($pedidosDb->Id_Pedido == $pedido->id_pedido)
                                       <p>{{$pedido->cantidad}}</p>
                                   @endif
                                   @endforeach
                                 
                                </td>
                               <td>@foreach ($pedidosT as $pedidosDb)
                                     @if ($pedidosDb->Id_Pedido == $pedido->id_pedido)
                                       <p>{{$pedido->talla}}</p>
                                     @endif
                                   @endforeach
                                  
                               </td>
                               <td>{{$pedido->Tipo_Pago}}</td>
                               <td>{{$pedido->Direccion}}</td>
                               <td>{{$pedido->Total}}</td>
                               <td>{{$pedido->Fecha}}</td>
                            
                           </tr>
                           @endforeach
                           @endif

                        </tbody>
                       
                    </table>
                   
                </div>

<div class="invoicelist-footer">
  <table contenteditable>
 
    <tr>
    <td style="font-size:16px; color:#000"><strong>Sub Total: ${{$subtotal}}</strong></td><br>
    <td style="font-size:16px; color:#000"><strong>Envío: $10000</strong></td><br>
      <td style="font-size:18px; color:#000"><strong>Total: ${{$total}}</strong></td>
    </tr>
    

  </table>
</div>


</body>
</html>