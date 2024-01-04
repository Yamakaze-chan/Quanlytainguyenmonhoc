<html lang="en" style="padding: 0px; margin: 0px">
    <head>
      <title>RLS Admin</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js" integrity="sha512-q+4liFwdPC/bNdhUpZx6aXDx/h77yEQtn4I1slHydcbZK34nLaR3cAeYSJshoxIOq3mjEf7xJE8YWIUHMn+oCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js" integrity="sha512-BbrZ76UNZq5BhH7LL7pn9A4TKQpQeNCHOo65/akfelcIBbcVvYWOFQKPXIrykE3qZxYjmDX573oa4Ywsc7rpTw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
/* -- import Roboto Font ---------------------------- */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzQdKg.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xMIzc.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxMIzc.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fABc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu5mxP.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fABc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfABc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfABc9.ttf) format('truetype');
}
/* -- You can use this tables in Bootstrap (v3) projects. -- */
/* -- Box model ------------------------------- */
*,
*:after,
*:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* -- Demo style ------------------------------- */
html,
body {
  position: relative;
  min-height: 100%;
  height: 100%;
}
html {
  position: relative;
  overflow-x: hidden;
  margin: 16px;
  padding: 0;
  min-height: 100%;
  font-size: 62.5%;
}
body {
  font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;
  font-style: normal;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 2rem;
  letter-spacing: 0.01rem;
  color: #212121;
  background-color: #f5f5f5;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}
#demo {
  margin: 20px auto;
  max-width: 960px;
}
#demo h1 {
  font-size: 2.4rem;
  line-height: 3.2rem;
  letter-spacing: 0;
  font-weight: 300;
  color: #212121;
  text-transform: inherit;
  margin-bottom: 1rem;
  text-align: center;
}
#demo h2 {
  font-size: 1.5rem;
  line-height: 2.8rem;
  letter-spacing: 0.01rem;
  font-weight: 400;
  color: #212121;
  text-align: center;
}
.shadow-z-1 {
  -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
}
/* -- Material Design Table style -------------- */
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 2rem;
  background-color: #fff;
}
.table > thead > tr,
.table > tbody > tr,
.table > tfoot > tr {
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  text-align: left;
  padding: 1.6rem;
  vertical-align: top;
  border-top: 0;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.table > thead > tr > th {
  font-weight: 400;
  color: #757575;
  vertical-align: bottom;
  border-bottom: 1px solid rgba(0, 0, 0, 0.12);
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 1px solid rgba(0, 0, 0, 0.12);
}
.table .table {
  background-color: #fff;
}
.table .no-border {
  border: 0;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 0.8rem;
}
.table-bordered {
  border: 0;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 0;
  border-bottom: 1px solid #e0e0e0;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: rgba(0, 0, 0, 0.12);
}
@media screen and (max-width: 768px) {
  .table-responsive-vertical > .table {
    margin-bottom: 0;
    background-color: transparent;
  }
  .table-responsive-vertical > .table > thead,
  .table-responsive-vertical > .table > tfoot {
    display: none;
  }
  .table-responsive-vertical > .table > tbody {
    display: block;
  }
  .table-responsive-vertical > .table > tbody > tr {
    display: block;
    border: 1px solid #e0e0e0;
    border-radius: 2px;
    margin-bottom: 1.6rem;
  }
  .table-responsive-vertical > .table > tbody > tr > td {
    background-color: #fff;
    display: block;
    vertical-align: middle;
    text-align: right;
  }
  .table-responsive-vertical > .table > tbody > tr > td[data-title]:before {
    content: attr(data-title);
    float: left;
    font-size: inherit;
    font-weight: 400;
    color: #757575;
  }
  .table-responsive-vertical.shadow-z-1 {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  }
  .table-responsive-vertical.shadow-z-1 > .table > tbody > tr {
    border: none;
    -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  }
  .table-responsive-vertical > .table-bordered {
    border: 0;
  }
  .table-responsive-vertical > .table-bordered > tbody > tr > td {
    border: 0;
    border-bottom: 1px solid #e0e0e0;
  }
  .table-responsive-vertical > .table-bordered > tbody > tr > td:last-child {
    border-bottom: 0;
  }
  .table-responsive-vertical > .table-striped > tbody > tr > td,
  .table-responsive-vertical > .table-striped > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical > .table-striped > tbody > tr > td:nth-child(odd) {
    background-color: #f5f5f5;
  }
  .table-responsive-vertical > .table-hover > tbody > tr:hover > td,
  .table-responsive-vertical > .table-hover > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical > .table-hover > tbody > tr > td:hover {
    background-color: rgba(0, 0, 0, 0.12);
  }
}
.table-striped.table-mc-red > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-red > tbody > tr:nth-child(odd) > th {
  background-color: #fde0dc;
}
.table-hover.table-mc-red > tbody > tr:hover > td,
.table-hover.table-mc-red > tbody > tr:hover > th {
  background-color: #f9bdbb;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-red > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td:nth-child(odd) {
    background-color: #fde0dc;
  }
  .table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-red > tbody > tr > td:hover {
    background-color: #f9bdbb;
  }
}
.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > th {
  background-color: #fce4ec;
}
.table-hover.table-mc-pink > tbody > tr:hover > td,
.table-hover.table-mc-pink > tbody > tr:hover > th {
  background-color: #f8bbd0;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td:nth-child(odd) {
    background-color: #fce4ec;
  }
  .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr > td:hover {
    background-color: #f8bbd0;
  }
}
.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > th {
  background-color: #f3e5f5;
}
.table-hover.table-mc-purple > tbody > tr:hover > td,
.table-hover.table-mc-purple > tbody > tr:hover > th {
  background-color: #e1bee7;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td:nth-child(odd) {
    background-color: #f3e5f5;
  }
  .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr > td:hover {
    background-color: #e1bee7;
  }
}
.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > th {
  background-color: #ede7f6;
}
.table-hover.table-mc-deep-purple > tbody > tr:hover > td,
.table-hover.table-mc-deep-purple > tbody > tr:hover > th {
  background-color: #d1c4e9;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td:nth-child(odd) {
    background-color: #ede7f6;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr > td:hover {
    background-color: #d1c4e9;
  }
}
.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > th {
  background-color: #e8eaf6;
}
.table-hover.table-mc-indigo > tbody > tr:hover > td,
.table-hover.table-mc-indigo > tbody > tr:hover > th {
  background-color: #c5cae9;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td:nth-child(odd) {
    background-color: #e8eaf6;
  }
  .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr > td:hover {
    background-color: #c5cae9;
  }
}
.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > th {
  background-color: #e7e9fd;
}
.table-hover.table-mc-blue > tbody > tr:hover > td,
.table-hover.table-mc-blue > tbody > tr:hover > th {
  background-color: #d0d9ff;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td:nth-child(odd) {
    background-color: #e7e9fd;
  }
  .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr > td:hover {
    background-color: #d0d9ff;
  }
}
.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > th {
  background-color: #e1f5fe;
}
.table-hover.table-mc-light-blue > tbody > tr:hover > td,
.table-hover.table-mc-light-blue > tbody > tr:hover > th {
  background-color: #b3e5fc;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td:nth-child(odd) {
    background-color: #e1f5fe;
  }
  .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr > td:hover {
    background-color: #b3e5fc;
  }
}
.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > th {
  background-color: #e0f7fa;
}
.table-hover.table-mc-cyan > tbody > tr:hover > td,
.table-hover.table-mc-cyan > tbody > tr:hover > th {
  background-color: #b2ebf2;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td:nth-child(odd) {
    background-color: #e0f7fa;
  }
  .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr > td:hover {
    background-color: #b2ebf2;
  }
}
.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > th {
  background-color: #e0f2f1;
}
.table-hover.table-mc-teal > tbody > tr:hover > td,
.table-hover.table-mc-teal > tbody > tr:hover > th {
  background-color: #b2dfdb;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td:nth-child(odd) {
    background-color: #e0f2f1;
  }
  .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr > td:hover {
    background-color: #b2dfdb;
  }
}
.table-striped.table-mc-green > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-green > tbody > tr:nth-child(odd) > th {
  background-color: #d0f8ce;
}
.table-hover.table-mc-green > tbody > tr:hover > td,
.table-hover.table-mc-green > tbody > tr:hover > th {
  background-color: #a3e9a4;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-green > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td:nth-child(odd) {
    background-color: #d0f8ce;
  }
  .table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-green > tbody > tr > td:hover {
    background-color: #a3e9a4;
  }
}
.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > th {
  background-color: #f1f8e9;
}
.table-hover.table-mc-light-green > tbody > tr:hover > td,
.table-hover.table-mc-light-green > tbody > tr:hover > th {
  background-color: #dcedc8;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td:nth-child(odd) {
    background-color: #f1f8e9;
  }
  .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr > td:hover {
    background-color: #dcedc8;
  }
}
.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > th {
  background-color: #f9fbe7;
}
.table-hover.table-mc-lime > tbody > tr:hover > td,
.table-hover.table-mc-lime > tbody > tr:hover > th {
  background-color: #f0f4c3;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td:nth-child(odd) {
    background-color: #f9fbe7;
  }
  .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr > td:hover {
    background-color: #f0f4c3;
  }
}
.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > th {
  background-color: #fffde7;
}
.table-hover.table-mc-yellow > tbody > tr:hover > td,
.table-hover.table-mc-yellow > tbody > tr:hover > th {
  background-color: #fff9c4;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td:nth-child(odd) {
    background-color: #fffde7;
  }
  .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr > td:hover {
    background-color: #fff9c4;
  }
}
.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > th {
  background-color: #fff8e1;
}
.table-hover.table-mc-amber > tbody > tr:hover > td,
.table-hover.table-mc-amber > tbody > tr:hover > th {
  background-color: #ffecb3;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td:nth-child(odd) {
    background-color: #fff8e1;
  }
  .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr > td:hover {
    background-color: #ffecb3;
  }
}
.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > th {
  background-color: #fff3e0;
}
.table-hover.table-mc-orange > tbody > tr:hover > td,
.table-hover.table-mc-orange > tbody > tr:hover > th {
  background-color: #ffe0b2;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td:nth-child(odd) {
    background-color: #fff3e0;
  }
  .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr > td:hover {
    background-color: #ffe0b2;
  }
}
.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > th {
  background-color: #fbe9e7;
}
.table-hover.table-mc-deep-orange > tbody > tr:hover > td,
.table-hover.table-mc-deep-orange > tbody > tr:hover > th {
  background-color: #ffccbc;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td:nth-child(odd) {
    background-color: #fbe9e7;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr > td:hover {
    background-color: #ffccbc;
  }
}
.overlay {
	position: absolute;
	top: 0;
	bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
	transition: opacity 200ms;
  visibility: hidden;
	opacity: 0;
	&.light {
    background: rgba(255,255,255,0.5);
  }
  .cancel {
    position: absolute;
    width: 100%;
    height: 100%;
    cursor: default;
  }
  &:target {
    visibility: visible;
    opacity: 1;
  }
}

.popup {
	margin: 50px auto;
	padding: 20px;
	background: #fff;
	border: 1px solid #666;
	width: 90vw;
    height: 90vh;
	box-shadow: 0 0 50px rgba(0,0,0,0.5);
	position: relative;
  .light & {
    border-color: #aaa;
    box-shadow: 0 2px 10px rgba(0,0,0,0.25);
  }
  h2 {
    margin-top: 0;
    color: #666;
    font-family: "Trebuchet MS", Tahoma, Arial, sans-serif;
  }
  .close {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 20px;
    right: 20px;
    opacity: 0.8;
    transition: all 200ms;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: #666;
    &:hover {
      opacity: 1;
    }
  }
  .content {
    max-height: 400px;
    overflow: auto;
  }
  p {
    margin: 0 0 1em;
    &:last-child {
      margin: 0;
    }
  }
}img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}
.btn {
  background-color: white;
  border: 1px solid #cccccc;
  color: #696969;
  padding: 0.5rem;
  text-transform: lowercase;
}
.btn--block {
  display: block;
  margin: 10px;
}
.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
}
.cards__item {
  display: flex;
  padding: 1rem;
}
@media (min-width: 40rem) {
  .cards__item {
    width: 50%;
  }
}
@media (min-width: 56rem) {
  .cards__item {
    width: 33.3333%;
  }
}
.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}
.card:hover .card__image {
  filter: contrast(100%);
}
.card__content {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  padding: 1rem;
}
.card__image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  filter: contrast(70%);
  overflow: hidden;
  position: relative;
  transition: filter 0.5s cubic-bezier(0.43, 0.41, 0.22, 0.91);
}
.card__image::before {
  content: "";
  display: block;
  padding-top: 56.25%;
}
@media (min-width: 40rem) {
  .card__image::before {
    padding-top: 66.6%;
  }
}
.card__title {
  color: #696969;
  font-size: 1.25rem;
  font-weight: 300;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.card__text {
  flex: 1 1 auto;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
}

/*** COLORS ***/
/*** DEMO ***/
.cntr {
  display: table;
  width: 100%;
  height: 100%;
}
.cntr .cntr-innr {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}
/*** STYLES ***/
.search {
  display: inline-block;
  position: relative;
  height: 35px;
  width: 35px;
  box-sizing: border-box;
  margin: 0px 8px 7px 0px;
  padding: 7px 9px 0px 9px;
  border: 3px solid gray;
  border-radius: 25px;
  transition: all 200ms ease;
  cursor: text;
}
.search:after {
  content: "";
  position: absolute;
  width: 3px;
  height: 20px;
  right: -5px;
  top: 21px;
  background: gray;
  border-radius: 3px;
  transform: rotate(-45deg);
  transition: all 200ms ease;
}
.search.active,
.search:hover {
  width: 200px;
  margin-right: 0px;
}
.search.active:after,
.search:hover:after {
  height: 0px;
}
.search input {
  width: 100%;
  border: none;
  box-sizing: border-box;
  font-family: Helvetica;
  font-size: 15px;
  color: inherit;
  background: transparent;
  outline-width: 0px;
}

.overlay-form {
  position:absolute;
  top:50vh;
  left:0px;
  width:100vw;
  height:0vh;
  background:rgba(0,0,0,0.8);
  color: white;
  z-index:-1;
  opacity:0;
  padding:80px 100px;
  overflow:hidden;
  box-sizing:border-box;
  transition: top 500ms ease-in-out,
              opacity 500ms ease-in-out,
              height 0ms ease-in-out 500ms;  
}
.overlay-form .close-btn {
  position:absolute;
  top:20px;
  right:40px;
  color:#fff;
  font-size:40px;
  font-weight:600;
  cursor:pointer;
}
.overlay-form h1 {
  font-size:32px;
  color:#fff;
}
.overlay-form p {
  font-size:16px;
  color:#eee;
  margin:-15px 0px 30px;
}
.overlay-form .form-element {
  margin:20px 0px;
}
.overlay-form label {
  display:block;
  font-size:17px;
  color:#eee;
  margin-bottom:5px;
}
.overlay-form input {
  width:100%;
  padding:6px;
  font-size:2em;
  color: white;
  border:2px solid #eee;
  background:transparent;
  outline:none;
  border-radius:10px;
}
.overlay-form button,
.center button {
  margin-top:10px;
  width:100px;
  height:35px;
  font-size:15px;
  text-transform:uppercase;
  background:#fff;
  color:#222;
  border:none;
  outline:none;
  border-radius:10px;
}
.center {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.center button {
  width:150px;
  height:40px;
  font-weight:600;
  box-shadow:3px 3px 2px 1px rgba(0,0,0,0.1);
  cursor:pointer;
}

body.activeForm .overlay-form {
  z-index:2;
  opacity:1;
  top:0px;
  height:max-content;
  transition: top 500ms ease-in-out,
              opacity 500ms ease-in-out,
              height 0ms ease-in-out 0ms;
}

.tgl-flip + .tgl-btn {
  padding: 10px;
  transition: all 0.2s ease;
  font-family: sans-serif;
  perspective: 100px;
}
.tgl-flip + .tgl-btn:after, .tgl-flip + .tgl-btn:before {
  display: inline-block;
  transition: all 0.4s ease;
  width: 100%;
  text-align: center;
  position: absolute;
  line-height: 2em;
  font-weight: bold;
  color: #fff;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  border-radius: 4px;
}
.tgl-flip + .tgl-btn:after {
  content: attr(data-tg-on);
  background: #02C66F;
  transform: rotateY(-180deg);
}
.tgl-flip + .tgl-btn:before {
  background: #FF3A19;
  content: attr(data-tg-off);
}
.tgl-flip + .tgl-btn:active:before {
  transform: rotateY(-20deg);
}
.tgl-flip:checked + .tgl-btn:before {
  transform: rotateY(180deg);
}
.tgl-flip:checked + .tgl-btn:after {
  transform: rotateY(0);
  left: 0;
  background: #7FC6A6;
}
.tgl-flip:checked + .tgl-btn:active:after {
  transform: rotateY(20deg);
}

</style>  
</head>

<body style="margin:0px; padding: 0px">
  <div id="demo">
  <h1 style="text-align:center; font-size: 2em; font-weight: bold">Danh sách <text style="color:red">User</text></h1>
            <h3 style="text-align:center">
                Trang chỉnh sửa thông tin User trên hệ thống dành cho Admin
            </h3>
  
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên</th>
          <th>Nickname</th>
          <th>File đã chia sẻ</th>
          <th>Video đã chia sẻ</th>
          <th>Admin</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody id="main_content">
      </tbody>
    </table>
  </div>
  
  <div style="display: inline-block; vertical-align: top; text-align:end;">
  <button onclick="toggleForm()">Tạo tài khoản</button>
  </div>
</div>

<!--Overlay form-->
<div id="overlay_box" class="overlay">
	<div class="popup">
		<h2>Thông tin chi tiết</h2>
		<a class="close" href="#">&times;</a>
		<div class="content row">
            <div class="col">
			<p>ID: <text id="id_detail"></text></p>
            <p>Tài khoản: <text id="username_detail"></text></p>
            <p>Nickname: <text id="nickname_detail"></text></p>
            </div>
            <div class="cntr col">
                <div class="cntr-innr">
                <label class="search" for="inpt_search" style="float:inline-end">
                        <input id="inpt_search" type="text" />
                    </label>
                </div>
            </div>
		</div>
        <div class="row">
            <div class="col">
                <h2>Danh sách file</h2>
                <ul id="list" style="overflow-y: scroll; height:70vh; overflow-x:hidden;">
                <span class="empty-item">Không tìm thấy kết quả</span>
                </ul>
            </div>
            <div class="col">
                <h2>Danh sách video</h2>
                <ul class="cards" style="overflow-y: scroll; height:70vh">
                <span class="empty-item">Không tìm thấy kết quả</span>
                </ul>
            </div>
        </div>
	</div>
</div>
  
<div class="overlay-form">
  <div class="close-btn" onclick="toggleForm()">&times;</div>
  <h1>Tạo tài khoản</h1>
  <p class="error"></p>
  <div class="form-element">
    <label for="username">Tài khoản</label>
    <input type="text" id="username">
  </div>
  <div class="form-element">
    <label for="password-1">Mật khẩu</label>
    <input type="password" id="password-1">
  </div>
  <div class="form-element">
    <label for="password-2">Xác nhận mật khẩu</label>
    <input type="password" id="password-2">
  </div>
  <div class="form-element">
    <label for="nickname">Tên</label>
    <input type="text" id="nickname">
  </div>
  <input class="tgl tgl-flip" id="cb5" type="checkbox" style=" padding: 10px;-webkit-appearance: none;-moz-appearance: none; appearance: none;border: 0px;"/>
    <label class="tgl-btn" data-tg-off="Đây là tài khoản thường" data-tg-on="Đây là tài khoản Admin" for="cb5"></label>
  <div class="form-element">
    <button onclick="create_account()">Tạo</button>
  </div>
</div>
      <script>
/**
 * Created by Kupletsky Sergey on 05.11.14.
 *
 * Material Design Responsive Table
 * Tested on Win8.1 with browsers: Chrome 37, Firefox 32, Opera 25, IE 11, Safari 5.1.7
 * You can use this table in Bootstrap (v3) projects. Material Design Responsive Table CSS-style will override basic bootstrap style.
 * JS used only for table constructor: you don't need it in your project
 */

 $('.close').on('click', function(){
    $('#list').html("");
    $('.cards').html("");
 })

 $(document).ready(function() {

var table = $('#table');

// Table bordered
$('#table-bordered').change(function() {
    var value = $( this ).val();
    table.removeClass('table-bordered').addClass(value);
});

// Table striped
$('#table-striped').change(function() {
    var value = $( this ).val();
    table.removeClass('table-striped').addClass(value);
});

// Table hover
$('#table-hover').change(function() {
    var value = $( this ).val();
    table.removeClass('table-hover').addClass(value);
});

// Table color
$('#table-color').change(function() {
    var value = $(this).val();
    table.removeClass(/^table-mc-/).addClass(value);
});
});

// jQuery’s hasClass and removeClass on steroids
// by Nikita Vasilyev
// https://github.com/NV/jquery-regexp-classes
(function(removeClass) {

jQuery.fn.removeClass = function( value ) {
    if ( value && typeof value.test === "function" ) {
        for ( var i = 0, l = this.length; i < l; i++ ) {
            var elem = this[i];
            if ( elem.nodeType === 1 && elem.className ) {
                var classNames = elem.className.split( /\s+/ );

                for ( var n = classNames.length; n--; ) {
                    if ( value.test(classNames[n]) ) {
                        classNames.splice(n, 1);
                    }
                }
                elem.className = jQuery.trim( classNames.join(" ") );
            }
        }
    } else {
        removeClass.call(this, value);
    }
    return this;
}

})(jQuery.fn.removeClass);
    </script>

    <!--Get user info-->
    <script>
        $(function(e){
            $.get( "get_user_info_admin.php", 
            { 
                
            },
            function (data)
            {
                $('#main_content').html("");
                data.split("///splithere///").forEach(element => {
                    if(element.length != 0)
                    {
                        var data_values = element.split(";");
                        console.log(data_values)
                        html = `
                        <tr>
                        <td data-title="ID">${data_values[0]}</td>
                        <td data-title="username">${data_values[1]}</td>
                        <td data-title="nickname">${data_values[2]}</td>
                        <td data-title="file">${data_values[3]}</td>
                        <td data-title="video">${data_values[4]}</td>
                        <td data-title="Admin">${data_values[5]}</td>
                        <td data-title="action">
                            <p><a class="button" href="#overlay_box" onclick="show_detail_user(\'${data_values[0]}\',\'${data_values[1]}\',\'${data_values[2]}\')">Xem chi tiết</a></p>
                            <p><a class="button" onclick="Delete_user(\'${data_values[1]}\')">Xóa người dùng</a></p>
                        </td>
                        </tr>
                        `
                        $('#main_content').append(html);
                    }
                });

            }
            )
        })
    </script>

    <script>
        function show_detail_user(id,username,nickname){
            $('#id_detail').text(id);
            $('#username_detail').text(username);
            $('#nickname_detail').text(nickname);
            $.get("get_PDF_file_content.php",
            {
                user: username,
            },
            function(data,success){
                data.split("///splithere///").forEach(element => {
                    if(element.length != 0)
                    {
                        $('#list').html("");
                        var data_values = element.split(";");
                        //It is important that you use the file and not the filepath (The file path won't work because of security issues)
                        fetch("uploads\\"+data_values[1]).then(res => res.blob()).then(res => {
                        var header = data_values[1].replaceAll(".pdf","");
                        var user = data_values[0];
                        var time = data_values[2];
                        var fileReader = new FileReader();  
                        fileReader.onload = function() {
                            var typedarray = new Uint8Array(this.result);
                            //replaced the old function with the new api
                            const loadingTask = pdfjsLib.getDocument(typedarray).promise.then(function(pdf) {
                                thePdf = pdf;
                                viewer = document.getElementById('pdf-viewer');
                                ////Many pages
                                // for(page = 1; page <= pdf.numPages; page++) {
                                //   canvas = document.createElement("canvas");    
                                //   canvas.className = 'pdf-page-canvas';         
                                //   viewer.appendChild(canvas);            
                                //   renderPage(page, canvas);
                                // }

                                ////First page
                                canvas = document.createElement("canvas");    
                                canvas.className = 'pdf-page-canvas';         
                                //viewer.appendChild(canvas);  
                                //renderPage(1, canvas);
                                //console.log(renderPage(1, canvas))

                                renderPage(1, canvas, header, user, time)
                                
                            });

                        };
                        fileReader.readAsArrayBuffer(res);})
                    }}
                    
                    )}
                )
            $.get( "get_video_content_user.php", 
            { 
                search_value: "",
                username: username,
            },
            function (data, success)
            {
                console.log(data)
                $('.cards').html("");
                data.split("///splithere///").forEach(element => {
                    if(element.length != 0)
                    {
                        var data_values = element.split(";");
                        var id = data_values[2].substr(data_values[2].indexOf("watch?v=")+8, data_values[2].length - data_values[2].indexOf("watch?v="));
                        html = `
                        <li class="cards__item">
                            <div class="card">
                            <img src="http://img.youtube.com/vi/${id}/sddefault.jpg" style="width:300px">
                            <div class="card__content">
                                <div class="card__title">${data_values[1]}</div>
                                <button class="btn btn--block card__btn" onclick="location.href='https://www.youtube.com/watch?v=${id}';">Xem</button>
                                <button class="btn btn--block card__btn" onclick="Delete_video(\'${id}\')">Xóa</button>
                            </div>
                            </div>
                        </li>
                        
                        `
                        $('.cards').append(html);
                    }
                });

            }
            )
        }
        function renderPage(pageNumber, canvas, header, user, time) {
        thePdf.getPage(pageNumber).then(function(page) {
          viewport = page.getViewport({ scale: 1 });
          canvas.height = viewport.height;
          canvas.width = viewport.width;   
          //ctx = canvas.getContext("2d");
          //console.log(page)
          //document.getElementById('demo123').src = page
          //return canvas.getContext('2d')
          var renderTask = page.render({canvasContext: canvas.getContext('2d'), viewport: viewport});
          renderTask.promise.then(function() {
            //return canvas.toDataURL('image/jpeg')})
            html = `
                    <li class="in">
                        <img src="${canvas.toDataURL('image/jpeg')}" alt="" style="max-height:200px;max-width:100%"/>
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                ${header}</h4>
                            <p class="group inner list-group-item-text">
                                Posted by: ${user}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        Post on: ${time}</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="uploads/${header}.pdf" download>Download</a>
                                    <a class="btn btn-success" onclick="delete_PDF(\'${user}\',\'${header}\')" >Xóa</a>
                                </div>
                            </div>
                        </div>
                    </li>
            `
            $('#list').append(html)
            var jobCount = $('#list .in').length;
            $('.list-count').text(jobCount + ' kết quả');
          //return canvas.toDataURL();  
        })});
    }
    function delete_PDF(user, header){
        $.get('delete_PDF_file_admin.php',
            {
                user: user,
                url: header,
            },
            function (data){
                if(data == "success")
                {
                    location.reload();
                }
            }
        )
    }
    function Delete_video(id){
            $.get('delete_video_admin.php',
                {
                    id: id,
                },
                function(){
                    location.reload()
                }
            )
        }
    </script>
    <script>
        $("#inpt_search").on('focus', function () {
	$(this).parent('label').addClass('active');
});

$("#inpt_search").on('blur', function () {
	if($(this).val().length == 0)
		$(this).parent('label').removeClass('active');
});

$('#inpt_search').keyup(function(e){
            $.get( "get_video_content_user.php", 
            { 
                search_value: $('#inpt_search').val(),
                username: $("username_detail").text(),
            },
            function (data, success)
            {
                console.log(data)
                $('.cards').html("");
                data.split("///splithere///").forEach(element => {
                    if(element.length != 0)
                    {
                        var data_values = element.split(";");
                        var id = data_values[2].substr(data_values[2].indexOf("watch?v=")+8, data_values[2].length - data_values[2].indexOf("watch?v="));
                        html = `
                        <li class="cards__item" style="height: fit-content">
                            <div class="card">
                            <img src="http://img.youtube.com/vi/${id}/sddefault.jpg" class = "card__image">
                            <div class="card__content">
                                <div class="card__title">${data_values[1]}</div>
                                <button class="btn btn--block card__btn" onclick="location.href='https://www.youtube.com/watch?v=${id}';">Xem</button>
                                <button class="btn btn--block card__btn" onclick="Delete_video(\'${id}\')">Xóa</button>
                            </div>
                            </div>
                        </li>
                        
                        `
                        $('.cards').append(html);
                    }
                });

            }
            )

            $.get("get_PDF_file_content.php",
            {
                user: $("#username_detail").text(),
                keyword: $("#inpt_search").val(),
            },
            function(data,success){
                data.split("///splithere///").forEach(element => {
                    if(element.length != 0)
                    {
                        $('#list').html("");
                        var data_values = element.split(";");
                        //It is important that you use the file and not the filepath (The file path won't work because of security issues)
                        fetch("uploads\\"+data_values[1]).then(res => res.blob()).then(res => {
                        var header = data_values[1].replaceAll(".pdf","");
                        var user = data_values[0];
                        var time = data_values[2];
                        var fileReader = new FileReader();  
                        fileReader.onload = function() {
                            var typedarray = new Uint8Array(this.result);
                            //replaced the old function with the new api
                            const loadingTask = pdfjsLib.getDocument(typedarray).promise.then(function(pdf) {
                                thePdf = pdf;
                                viewer = document.getElementById('pdf-viewer');
                                ////Many pages
                                // for(page = 1; page <= pdf.numPages; page++) {
                                //   canvas = document.createElement("canvas");    
                                //   canvas.className = 'pdf-page-canvas';         
                                //   viewer.appendChild(canvas);            
                                //   renderPage(page, canvas);
                                // }

                                ////First page
                                canvas = document.createElement("canvas");    
                                canvas.className = 'pdf-page-canvas';         
                                //viewer.appendChild(canvas);  
                                //renderPage(1, canvas);
                                //console.log(renderPage(1, canvas))

                                renderPage(1, canvas, header, user, time)
                                
                            });

                        };
                        fileReader.readAsArrayBuffer(res);})
                }}
                
                    )}
                )
            })

            function Delete_user(username){
                $.post('delete_user.php',{
                    user: username,
                }, function(data)
                {
                    if(data == "success"){
                        location.reload();
                    }
                })
            }
            function toggleForm(){
                document.body.classList.toggle('activeForm');
              }
            function create_account(){
              $.post('create_admin.php',{
                username: $('#username').val(),
                pass1: $('#password-1').val(),
                pass2: $('#password-2').val(),
                nickname: $('#nickname').val(),
                admin: $('.tgl-flip').is(":checked")?"1":"0",
              }, function(data){
                if(data == "success"){
                  location.reload();
                }
                else{
                  $('.error').text(data)
                }
              })
            }
    </script>
</body>
</html>