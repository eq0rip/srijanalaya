/*! normalize.css v3.0.1 | MIT License | git.io/normalize */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
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
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
@media print {
  * {
    text-shadow: none !important;
    color: #000 !important;
    background: transparent !important;
    box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  select {
    background: #fff !important;
  }
  .navbar {
    display: none;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../fonts/glyphicons-halflings-regular.eot');
  src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\2a";
}
.glyphicon-plus:before {
  content: "\2b";
}
.glyphicon-euro:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333333;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #428bca;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #2a6496;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  width: 100% \9;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 6px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  width: 100% \9;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 36px;
}
h2,
.h2 {
  font-size: 30px;
}
h3,
.h3 {
  font-size: 24px;
}
h4,
.h4 {
  font-size: 18px;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 10px;
}
.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 21px;
  }
}
small,
.small {
  font-size: 85%;
}
cite {
  font-style: normal;
}
mark,
.mark {
  background-color: #fcf8e3;
  padding: .2em;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777777;
}
.text-primary {
  color: #428bca;
}
a.text-primary:hover {
  color: #3071a9;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #428bca;
}
a.bg-primary:hover {
  background-color: #3071a9;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eeeeee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 10px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 20px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eeeeee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
  text-align: right;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
blockquote:before,
blockquote:after {
  content: "";
}
address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 3px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  box-shadow: none;
}
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.row {
  margin-left: -15px;
  margin-right: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
table {
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
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
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #666666;
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #666666;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #777777;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #777777;
}
.form-control::-webkit-input-placeholder {
  color: #777777;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  cursor: not-allowed;
  background-color: #eeeeee;
  opacity: 1;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  line-height: 34px;
  line-height: 1.42857143 \0;
}
input[type="date"].input-sm,
input[type="time"].input-sm,
input[type="datetime-local"].input-sm,
input[type="month"].input-sm {
  line-height: 30px;
}
input[type="date"].input-lg,
input[type="time"].input-lg,
input[type="datetime-local"].input-lg,
input[type="month"].input-lg {
  line-height: 46px;
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  min-height: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \9;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-left: 0;
  padding-right: 0;
}
.input-sm,
.form-horizontal .form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.input-lg,
.form-horizontal .form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
select.input-lg {
  height: 46px;
  line-height: 46px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 42.5px;
}
.form-control-feedback {
  position: absolute;
  top: 25px;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
}
.input-lg + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px;
}
.input-sm + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px;
}
.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  top: 0;
  right: 15px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 14.3px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
  }
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  border-radius: 4px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  pointer-events: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #428bca;
  border-color: #357ebd;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #3071a9;
  border-color: #285e8e;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
  background-color: #428bca;
  border-color: #357ebd;
}
.btn-primary .badge {
  color: #428bca;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  color: #428bca;
  font-weight: normal;
  cursor: pointer;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #2a6496;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px solid;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  text-align: left;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  background-color: #428bca;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  left: auto;
  right: 0;
}
.dropdown-menu-left {
  left: 0;
  right: auto;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px solid;
  content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus {
  outline: 0;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child > .btn:last-child,
.btn-group > .btn-group:first-child > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn-group:last-child > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-bottom-left-radius: 4px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn > input[type="radio"],
[data-toggle="buttons"] > .btn > input[type="checkbox"] {
  position: absolute;
  z-index: -1;
  opacity: 0;
  filter: alpha(opacity=0);
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  line-height: 46px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #666666;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 6px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  margin-left: -1px;
}
.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.nav > li.disabled > a {
  color: #777777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777777;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eeeeee;
  border-color: #428bca;
}
.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #666666;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #428bca;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .navbar {
    border-radius: 4px;
  }
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-width: 480px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
  height: 50px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 7.5px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
  .navbar-nav.navbar-right:last-child {
    margin-right: -15px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
  }
}
.navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding: 10px 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 8px;
  margin-bottom: 8px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .navbar-form.navbar-right:last-child {
    margin-right: -15px;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px;
  }
  .navbar-text.navbar-right:last-child {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #777777;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #777777;
}
.navbar-inverse .navbar-nav > li > a {
  color: #777777;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #fff;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #777777;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #777777;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #777777;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #ccc;
}
.breadcrumb > .active {
  color: #777777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #428bca;
  background-color: #fff;
  border: 1px solid #ddd;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #2a6496;
  background-color: #eeeeee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #fff;
  background-color: #428bca;
  border-color: #428bca;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #fff;
  border-color: #ddd;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 6px;
  border-top-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 6px;
  border-top-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.pager {
  padding-left: 0;
  margin: 20px 0;
  list-style: none;
  text-align: center;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777777;
  background-color: #fff;
  cursor: not-allowed;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #428bca;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #3071a9;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: #fff;
  line-height: 1;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
a.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #428bca;
  background-color: #fff;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eeeeee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron {
  border-radius: 6px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 63px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #428bca;
}
.thumbnail .caption {
  padding: 9px;
  color: #333333;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: 20px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar[aria-valuenow="1"],
.progress-bar[aria-valuenow="2"] {
  min-width: 30px;
}
.progress-bar[aria-valuenow="0"] {
  color: #777777;
  min-width: 30px;
  background-color: transparent;
  background-image: none;
  box-shadow: none;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media,
.media .media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media-object {
  display: block;
}
.media-heading {
  margin: 0 0 5px;
}
.media > .pull-left {
  margin-right: 10px;
}
.media > .pull-right {
  margin-left: 10px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
a.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
a.list-group-item:focus {
  text-decoration: none;
  color: #555;
  background-color: #f5f5f5;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #428bca;
  border-color: #428bca;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #e1edf7;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
a.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
a.list-group-item-success.active:hover,
a.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
a.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
a.list-group-item-info.active:hover,
a.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
a.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
a.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.panel > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 3px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 3px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: 20px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #428bca;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #428bca;
  border-color: #428bca;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #428bca;
}
.panel-primary > .panel-heading .badge {
  color: #428bca;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #428bca;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0;
}
.embed-responsive.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 6px;
}
.well-sm {
  padding: 9px;
  border-radius: 3px;
}
.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate3d(0, -25%, 0);
  transform: translate3d(0, -25%, 0);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
  min-height: 16.42857143px;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  visibility: visible;
  font-size: 12px;
  line-height: 1.4;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  text-decoration: none;
  background-color: #000;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  left: 5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  right: 5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  left: 5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  right: 5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  text-align: left;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  white-space: normal;
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 14px;
  font-weight: normal;
  line-height: 18px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  border-width: 10px;
  content: "";
}
.popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.popover.top > .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #fff;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.popover.right > .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #fff;
}
.popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.popover.bottom > .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left > .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #fff;
  bottom: -10px;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.carousel-control:hover,
.carousel-control:focus {
  outline: 0;
  color: #fff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  margin-top: -10px;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #fff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -15px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -15px;
  }
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-footer:before,
.modal-footer:after {
  content: " ";
  display: table;
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
  visibility: hidden !important;
}
.affix {
  position: fixed;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
@font-face {
  font-family: 'bree serif';
  src: url('../fonts/breeserif-regular-webfont.eot');
  /* IE9 Compat Modes */
  src: url('../fonts/breeserif-regular-webfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('../fonts/breeserif-regular-webfont.woff2') format('woff2'), /* Super Modern Browsers */ url('../fonts/breeserif-regular-webfont.woff') format('woff'), /* Pretty Modern Browsers */ url('../fonts/breeserif-regular-webfont.ttf') format('truetype'), /* Safari, Android, iOS */ url('../fonts/breeserif-regular-webfont.svg#svgFontName') format('svg');
  /* Legacy iOS */
}
@font-face {
  font-family: 'allerregular';
  src: url('../fonts/aller_std_rg-webfont.eot');
  src: url('../fonts/aller_std_rg-webfont.eot?#iefix') format('embedded-opentype'), url('../fonts/aller_std_rg-webfont.woff2') format('woff2'), url('../fonts/aller_std_rg-webfont.woff') format('woff'), url('../fonts/aller_std_rg-webfont.ttf') format('truetype'), url('../fonts/aller_std_rg-webfont.svg#allerregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
/*!
 * Yamm!3 - Yet another megamenu for Bootstrap 3
 * http://geedmo.github.com/yamm3
 * 
 * @geedmo - Licensed under the MIT license
 */
.yamm .nav,
.yamm .collapse,
.yamm .dropup,
.yamm .dropdown {
  position: static;
}
.yamm .container {
  position: relative;
}
.yamm .dropdown-menu {
  left: auto;
}
.yamm .yamm-content {
  padding: 20px 30px;
}
.yamm .dropdown.yamm-fw .dropdown-menu {
  left: 0;
  right: 0;
}
/* -------------------------------- 

Primary style

-------------------------------- */
html * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
*,
*:after,
*:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* -------------------------------- 

Modules - reusable parts of our design

-------------------------------- */
.cd-container {
  /* this class is used to give a max-width to the element it is applied to, and center it horizontally when it reaches that max-width */
  width: 90%;
  max-width: 1170px;
  margin: 0 auto;
}
.cd-container::after {
  /* clearfix */
  content: '';
  display: table;
  clear: both;
}
/* -------------------------------- 

Main components 

-------------------------------- */
header {
  height: 200px;
  line-height: 200px;
  text-align: center;
  background: #303e49;
}
header h1 {
  color: white;
  font-size: 18px;
  font-size: 1.125rem;
}
@media only screen and (min-width: 1170px) {
  header {
    height: 300px;
    line-height: 300px;
  }
  header h1 {
    font-size: 24px;
    font-size: 1.5rem;
  }
}
#cd-timeline {
  position: relative;
  padding: 2em 0;
  margin-top: 2em;
  margin-bottom: 2em;
}
#cd-timeline::before {
  /* this is the vertical line */
  content: '';
  position: absolute;
  top: -182px;
  left: 18px;
  height: 105%;
  width: 4px;
  background: #cececd;
  margin-top: 120px;
}
@media (max-width: 768px) {
  #cd-timeline::before {
    display: none;
  }
}
@media only screen and (min-width: 1170px) {
  #cd-timeline {
    margin-top: 3em;
    margin-bottom: 3em;
  }
  #cd-timeline::before {
    left: 50%;
    margin-left: -2px;
  }
}
.cd-timeline-block {
  position: relative;
  margin: 2em 0;
}
.cd-timeline-block a {
  color: #807f7f;
  font-size: 14px;
  font-weight: bold;
  font-family: 'Helvetica';
}
.popup {
  height: 100%;
  width: 100%;
  position: fixed;
  display: none;
  z-index: 10000;
  align-items: center;
  justify-content: center;
}
.popup .content {
  height: 200px;
  width: 280px;
  background-color: rgba(244, 244, 244, 0.5);
  text-align: center;
  z-index: 10001;
}
.popup .content .close-info {
  float: right;
  cursor: pointer;
  font-size: 20px;
  width: 20px;
  height: 20px;
  font-weight: bold;
  margin-top: 5px;
  margin-right: 5px;
}
.popup .content .close-info:hover {
  color: red;
}
.popup .content input {
  width: 200px;
  margin: 20px 40px;
  text-align: center;
  height: 40px;
}
.transbg_popup {
  display: none;
  height: 100%;
  width: 100%;
  background: black;
  opacity: 0.5;
  position: fixed;
  left: 0px;
  top: 0px;
  z-index: 100;
}
.cd-timeline-block:after {
  content: "";
  display: table;
  clear: both;
}
.cd-timeline-block:first-child {
  margin-top: 0;
}
.cd-timeline-block:last-child {
  margin-bottom: 0;
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-block {
    margin: 4em 0;
  }
  .cd-timeline-block:first-child {
    margin-top: 0;
  }
  .cd-timeline-block:last-child {
    margin-bottom: 0;
  }
}
.cd-timeline-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  top: 20%;
}
.cd-timeline-img img {
  display: block;
  width: 24px;
  height: 24px;
  position: relative;
  left: 50%;
  top: 50%;
  margin-left: -12px;
  margin-top: -12px;
}
.cd-timeline-img.cd-picture {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAO0lEQVQYlY3KuREAIAwEMfff4sau44hgePwQKJMB6ri77CcBdZypjHtK453CGKUnZumIVVqxS4DsJwEaNVZlfKeJOMkAAAAASUVORK5CYII=) repeat;
  display: flex;
  justify-content: center;
}
.cd-timeline-img.cd-picture span {
  position: relative;
  top: 32%;
  font-size: 20px;
  color: #FFF;
  font-family: 'Helvetica';
  font-weight: bold;
}
@media (max-width: 1159px) {
  .cd-timeline-img.cd-picture span {
    top: 25%;
    font-size: 13px;
  }
}
.cd-timeline-img.cd-movie {
  background: #c03b44;
}
.cd-timeline-img.cd-location {
  background: #f0ca45;
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-img {
    width: 60px;
    height: 60px;
    left: 50%;
    margin-left: -30px;
    /* Force Hardware Acceleration in WebKit */
    -webkit-transform: translateZ(0);
    -webkit-backface-visibility: hidden;
  }
  .cssanimations .cd-timeline-img.is-hidden {
    visibility: hidden;
  }
  .cssanimations .cd-timeline-img.bounce-in {
    visibility: visible;
    -webkit-animation: cd-bounce-1 0.6s;
    -moz-animation: cd-bounce-1 0.6s;
    animation: cd-bounce-1 0.6s;
  }
}
@-webkit-keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
  }
}
@-moz-keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    -moz-transform: scale(0.5);
  }
  60% {
    opacity: 1;
    -moz-transform: scale(1.2);
  }
  100% {
    -moz-transform: scale(1);
  }
}
@keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
  }
}
.cd-timeline-content {
  position: relative;
  margin-left: 60px;
  border-radius: 0.25em;
  padding: 1em;
}
.cd-timeline-content:after {
  content: "";
  display: table;
  clear: both;
}
.cd-timeline-content h2,
.cd-timeline-content a {
  color: #e91f4a;
}
.cd-timeline-content p,
.cd-timeline-content .cd-read-more,
.cd-timeline-content .cd-date {
  font-size: 13px;
  color: #929292 !important;
  font-family: 'Helvetica' !important;
  font-weight: normal;
}
.cd-timeline-content .cd-read-more,
.cd-timeline-content .cd-date {
  display: inline-block;
}
.cd-timeline-content p {
  margin: 1em 0;
  line-height: 1.6;
}
.cd-timeline-content .cd-read-more {
  float: right;
  padding: .8em 1em;
  background: #acb7c0;
  color: white;
  border-radius: 0.25em;
}
.no-touch .cd-timeline-content .cd-read-more:hover {
  background-color: #bac4cb;
}
.cd-timeline-content .cd-date {
  float: left;
  padding: .8em 0;
  opacity: .7;
}
.cd-timeline-content::before {
  content: '';
  position: absolute;
  top: 16px;
  right: 100%;
  height: 0;
  width: 0;
  border: 7px solid transparent;
  border-right: 7px solid white;
}
@media only screen and (min-width: 768px) {
  .cd-timeline-content h2 {
    font-size: 20px;
    font-size: 1.25rem;
  }
  .cd-timeline-content p {
    font-size: 11px;
  }
  .cd-timeline-content .cd-read-more,
  .cd-timeline-content .cd-date {
    font-size: 14px;
    font-size: 0.875rem;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-content {
    margin-left: 0;
    padding: 1.6em;
    width: 47.3%;
  }
  .cd-timeline-content .project-wrapper {
    background-size: cover;
    min-height: 200px;
    width: 98%;
  }
  .cd-timeline-content .project-wrapper .content {
    position: absolute;
    top: 230px;
  }
  .cd-timeline-content .project-wrapper .content h2 {
    color: #e91f4a;
    font-size: 16px;
    font-family: 'bree serif';
  }
  .cd-timeline-content .project-wrapper .content p {
    color: #807f7f;
    font-size: 12px;
    font-family: 'Helvetica';
  }
  .cd-timeline-content .project-wrapper .content .small-text img {
    margin-top: -2px;
  }
  .project-wrapper-left::before {
    position: absolute;
    height: 125px;
    left: 89.35%;
    top: -3px;
    border-bottom: 20px solid transparent;
    border-right: 20px solid #FFF;
    display: block;
    content: " ";
  }
  .project-wrapper-left::after {
    position: absolute;
    height: 135px;
    left: 89.35%;
    top: 25%;
    border-top: 20px solid transparent;
    border-right: 20px solid #FFF;
    display: block;
    content: " ";
  }
  .project-wrapper-right {
    margin-left: 1px;
  }
  .project-wrapper-right .content {
    left: 45px;
  }
  .project-wrapper-right::before {
    position: absolute;
    height: 125px;
    left: 4.5%;
    top: -3px;
    border-bottom: 20px solid transparent;
    border-left: 20px solid #FFF;
    display: block;
    content: " ";
  }
  .project-wrapper-right::after {
    position: absolute;
    height: 135px;
    left: 4.5%;
    top: 25%;
    border-top: 20px solid transparent;
    border-left: 20px solid #FFF;
    display: block;
    content: " ";
  }
  .cd-timeline-content .cd-read-more {
    float: left;
  }
  .cd-timeline-content .cd-date {
    position: absolute;
    width: 30%;
    left: 122%;
    top: 6px;
    font-size: 16px;
    font-size: 1rem;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content {
    float: right;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
    top: 24px;
    left: auto;
    right: 100%;
    border-color: transparent;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-read-more {
    float: right;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-date {
    left: auto;
    right: 122%;
    text-align: right;
  }
  .cssanimations .cd-timeline-content.is-hidden {
    visibility: hidden;
  }
  .cssanimations .cd-timeline-content.bounce-in {
    visibility: visible;
    -webkit-animation: cd-bounce-2 0.6s;
    -moz-animation: cd-bounce-2 0.6s;
    animation: cd-bounce-2 0.6s;
  }
}
@media only screen and (min-width: 1170px) and (min-width: 1600px) {
  .project-wrapper-left::before {
    left: 90.25%;
    top: -9px;
  }
}
@media only screen and (min-width: 1170px) and (min-width: 1600px) {
  .project-wrapper-left::after {
    left: 90.25%;
  }
}
@media only screen and (min-width: 1170px) and (min-width: 1600px) {
  .project-wrapper-right::before {
    left: 4.42%;
    top: -9px;
  }
}
@media only screen and (min-width: 1170px) and (min-width: 1600px) {
  .project-wrapper-right::after {
    left: 4.42%;
  }
}
@media only screen and (min-width: 1170px) {
  /* inverse bounce effect on even content blocks */
  .cssanimations .cd-timeline-block:nth-child(even) .cd-timeline-content.bounce-in {
    -webkit-animation: cd-bounce-2-inverse 0.6s;
    -moz-animation: cd-bounce-2-inverse 0.6s;
    animation: cd-bounce-2-inverse 0.6s;
  }
}
@-webkit-keyframes cd-bounce-2 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(20px);
  }
  100% {
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes cd-bounce-2 {
  0% {
    opacity: 0;
    -moz-transform: translateX(-100px);
  }
  60% {
    opacity: 1;
    -moz-transform: translateX(20px);
  }
  100% {
    -moz-transform: translateX(0);
  }
}
@keyframes cd-bounce-2 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
    -moz-transform: translateX(-100px);
    -ms-transform: translateX(-100px);
    -o-transform: translateX(-100px);
    transform: translateX(-100px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}
@-webkit-keyframes cd-bounce-2-inverse {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
  }
  100% {
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes cd-bounce-2-inverse {
  0% {
    opacity: 0;
    -moz-transform: translateX(100px);
  }
  60% {
    opacity: 1;
    -moz-transform: translateX(-20px);
  }
  100% {
    -moz-transform: translateX(0);
  }
}
@keyframes cd-bounce-2-inverse {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100px);
    -moz-transform: translateX(100px);
    -ms-transform: translateX(100px);
    -o-transform: translateX(100px);
    transform: translateX(100px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}
.next-project {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQ0lEQVQYlY3KOREAIAwEwDiJEBxEBu5TI+CoYHjyFdstKQsyo3VQJSlLHFcK45nc+CYzWumLXrpilHbMkrKAKklZMAFmv+oRMko1WAAAAABJRU5ErkJggg==) repeat !important;
}
.circle {
  border: 3px solid #ccc;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  margin: 0 auto;
  position: relative;
  margin-top: -98px;
}
.bottom-circle {
  margin-top: -93px;
}
.timeline-wrapper {
  margin-top: 100px;
  margin-bottom: 100px;
}
#cd-timeline {
  margin-bottom: 0;
}
.fixed {
  right: 10px;
}
.project-wrapper {
  background-size: cover;
}
.cd-timeline-block {
  height: 180px;
}
.cd-timeline-block:hover .cd-timeline-img {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQ0lEQVQYlY3KOREAIAwEwDiJEBxEBu5TI+CoYHjyFdstKQsyo3VQJSlLHFcK45nc+CYzWumLXrpilHbMkrKAKklZMAFmv+oRMko1WAAAAABJRU5ErkJggg==) repeat !important;
}
.cd-picture {
  margin-top: 50px;
}
@media (max-width: 1170px) {
  .cd-timeline-block {
    height: 420px;
  }
  .project-wrapper {
    height: 220px;
  }
  .cd-timeline-block {
    margin-top: 0;
  }
  .cd-timeline-block .cd-timeline-content {
    margin-top: 0;
  }
  .circle {
    margin-left: 14px;
  }
  .bottom-circle {
    margin-top: -50px;
  }
}
@media (min-width: 1160px) {
  .project-wrapper-right-wrap .content {
    margin-left: 20px;
  }
  .project-wrapper-right-wrap.first {
    margin-top: 0;
  }
}
.visihide {
  visibility: hidden;
}
.project-wrapper-right-wrap {
  float: right !important;
}
@media (max-width: 1169px) {
  .project-wrapper-right-wrap {
    float: left !important;
  }
}
.project-wrapper-left-wrap {
  float: left !important;
}
.cd-timeline-content .content {
  width: 380px;
  position: relative;
  z-index: 9;
}
.noselect {
  -webkit-user-select: none;
  /* Chrome/Safari */
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* IE10+ */
}
.left-align {
  text-align: left;
}
.right-align {
  text-align: right;
}
h2 {
  font-family: allerregular;
}
.clndr-wrap {
  max-width: 280px;
  margin: 30px auto;
  font-family: 'bree serif' 'sans-serif';
  font-size: 13px;
  margin-left: -20px;
}
@media (max-width: 1159px) {
  .clndr-wrap {
    width: 205px;
    font-size: 11px;
  }
}
.clndr-wrap .clndr .clndr-transparent-block {
  height: 295px;
  width: 280px;
  background-color: rgba(0, 0, 0, 0.8);
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  display: none;
}
@media (max-width: 1159px) {
  .clndr-wrap .clndr .clndr-transparent-block {
    width: 205px;
  }
}
.clndr-wrap .clndr .clndr-transparent-block .close-clndr-info {
  padding: 5px;
  color: #FFF;
  cursor: pointer;
  opacity: 0.7;
  position: absolute;
  right: 0;
  top: 0;
}
.clndr-wrap .clndr .clndr-transparent-block .content {
  opacity: 0.8;
}
.clndr-wrap .clndr .clndr-transparent-block .content h2 {
  color: #e91f4a;
  font-size: 16px;
}
.clndr-wrap .clndr .clndr-transparent-block .content p,
.clndr-wrap .clndr .clndr-transparent-block .content a {
  color: #FFF;
  font-size: 12px;
}
.clndr-wrap .clndr .clndr-transparent-block .content a:hover {
  color: #e91f4a;
}
.clndr-wrap .clndr .clndr-controls {
  display: block;
  text-align: right;
  color: #a2a2a2;
  font-size: 32px;
  max-width: 275px;
  width: 100%;
  margin-bottom: 10px;
}
.clndr-wrap .clndr .clndr-controls .clearfix,
.clndr-wrap .clndr .clndr-controls .dl-horizontal dd,
.clndr-wrap .clndr .clndr-controls .container,
.clndr-wrap .clndr .clndr-controls .container-fluid,
.clndr-wrap .clndr .clndr-controls .row,
.clndr-wrap .clndr .clndr-controls .form-horizontal .form-group,
.clndr-wrap .clndr .clndr-controls .btn-toolbar,
.clndr-wrap .clndr .clndr-controls .btn-group-vertical > .btn-group,
.clndr-wrap .clndr .clndr-controls .nav,
.clndr-wrap .clndr .clndr-controls .navbar,
.clndr-wrap .clndr .clndr-controls .navbar-header,
.clndr-wrap .clndr .clndr-controls .navbar-collapse,
.clndr-wrap .clndr .clndr-controls .pager,
.clndr-wrap .clndr .clndr-controls .panel-body,
.clndr-wrap .clndr .clndr-controls .modal-footer {
  clear: both;
}
.clndr-wrap .clndr .clndr-controls .header-day {
  font-size: 14px;
  float: left;
  margin-left: 6px;
  position: relative;
  top: 18px;
}
.clndr-wrap .clndr .clndr-controls .clndr-previous-button {
  display: inline;
  text-align: left;
  cursor: pointer;
  -webkit-user-select: none;
  /* Chrome/Safari */
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* IE10+ */
}
.clndr-wrap .clndr .clndr-controls .clndr-previous-button:hover {
  color: #e91f4a;
}
.clndr-wrap .clndr .clndr-controls .month {
  float: left;
  text-align: center;
}
.clndr-wrap .clndr .clndr-controls .clndr-next-button {
  display: inline;
  text-align: right;
  cursor: pointer;
  -webkit-user-select: none;
  /* Chrome/Safari */
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* IE10+ */
}
.clndr-wrap .clndr .clndr-controls .clndr-next-button:hover {
  color: #e91f4a;
}
.clndr-wrap .clndr .clndr-grid {
  text-align: center;
}
.clndr-wrap .clndr .clndr-grid:before,
.clndr-wrap .clndr .clndr-grid:after {
  content: " ";
  display: table;
}
.clndr-wrap .clndr .clndr-grid:after {
  clear: both;
}
.clndr-wrap .clndr .clndr-grid:before,
.clndr-wrap .clndr .clndr-grid:after {
  content: " ";
  display: table;
}
.clndr-wrap .clndr .clndr-grid:after {
  clear: both;
}
.clndr-wrap .clndr .clndr-grid .header-day {
  float: left;
  width: 30px;
  height: 30px;
  margin: 5px;
  margin-bottom: 10px;
  color: #e91f4a;
  font-family: 'bree serif' 'sans-serif';
  display: flex;
  align-items: center;
  justify-content: center;
}
@media (max-width: 1159px) {
  .clndr-wrap .clndr .clndr-grid .header-day {
    margin: 2px;
    width: 25px;
    height: 25px;
    border-radius: 25px 25px;
  }
}
.clndr-wrap .clndr .clndr-grid .day {
  float: left;
  width: 30px;
  height: 30px;
  margin: 5px;
  color: #a2a2a2;
  border: 1px solid #ebebeb;
  border-radius: 30px 30px;
  display: flex;
  align-items: center;
  justify-content: center;
}
@media (max-width: 1159px) {
  .clndr-wrap .clndr .clndr-grid .day {
    margin: 2px;
    width: 25px;
    height: 25px;
    border-radius: 25px 25px;
  }
}
.clndr-wrap .clndr .clndr-grid .day.event {
  background-color: #e91f4a;
  color: #FFF;
  cursor: pointer;
}
.clndr-wrap .clndr .clndr-grid .day.today {
  background-color: #0F70B7;
  color: #FFF;
}
.clndr-wrap .clndr .clndr-grid .day.selected {
  background-color: #E37FD6;
}
.clndr-wrap .clndr .clndr-grid .day.inactive {
  color: gray;
}
.clndr-wrap .clndr .clndr-grid .empty,
.clndr-wrap .clndr .clndr-grid .adjacent-month {
  float: left;
  width: 30px;
  height: 30px;
  background: #ddd;
  margin: 5px;
  border: 1px solid #a2a2a2;
  border-radius: 30px 30px;
  opacity: 0.3;
}
@media (max-width: 1159px) {
  .clndr-wrap .clndr .clndr-grid .empty,
  .clndr-wrap .clndr .clndr-grid .adjacent-month {
    margin: 2px;
    width: 25px;
    height: 25px;
    border-radius: 25px 25px;
  }
}
.clndr-wrap .clndr .clndr-today-button {
  width: 100%;
  text-align: center;
  cursor: pointer;
}
.clndr-wrap .clndr .clndr-today-button:hover {
  background-color: #ddd;
}
.clndr-wrap .multi-month-controls .quarter-button {
  display: inline-block;
  width: 25%;
}
.clndr-wrap .multi-month-controls .quarter-button:hover {
  cursor: pointer;
  background-color: #f4f4f4;
}
.clndr-next-button,
.clndr-previous-button,
.clndr-next-year-button,
.clndr-previous-year-button {
  -webkit-user-select: none;
  /* Chrome/Safari */
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* IE10+ */
}
.clndr-next-button.inactive,
.clndr-previous-button.inactive,
.clndr-next-year-button.inactive,
.clndr-previous-year-button.inactive {
  opacity: 0.5;
  cursor: default;
}
.fixed {
  margin-top: 70px;
  top: 0;
}
.fixed h2 {
  margin-left: -15px;
}
.product-item {
  position: relative;
  height: 450px;
  overflow: hidden;
}
.product-item form.cart-form {
  position: absolute;
  bottom: 0;
  right: 1px;
}
.product-item form.cart-form button.single_add_to_cart_button {
  background-color: #3f3e40 !important;
  border-radius: 0 !important;
  padding: 2px 3px 1px 3px;
}
.product-item form.cart-form button.single_add_to_cart_button:hover {
  background-color: #e91f4a !important;
  opacity: 1;
}
.product-item .product-img {
  background-size: cover !important;
  background-repeat: no-repeat;
  height: 450px;
}
@media (max-width: 992px) {
  .product-item .product-img {
    float: none !important;
    background-position: center !important;
    width: 100% !important;
    margin-top: 25px !important;
  }
}
.product-item .content {
  display: block;
  height: 115px;
  top: 100%;
  position: absolute;
  color: #807f7f;
  left: 0;
  bottom: 0;
  padding: 20px 100px;
  background-color: rgba(255, 255, 255, 0.8);
  transition: top 0.5s;
  -webkit-transition: top 0.5s;
}
@media (max-width: 768px) {
  .product-item .content {
    height: 135px !important;
  }
}
.product-item .content h2 {
  color: #424243;
  font-size: 16px;
  line-height: 1;
}
.product-item .content p {
  padding-right: 0;
  font-size: 11px !important;
}
@media (max-width: 992px) {
  .product-item .content form {
    right: 25px;
    bottom: 25px;
  }
}
.product-item:hover .content {
  top: 74.5%;
}
.first-featured {
  margin-right: 10px;
}
.contd-products {
  margin-top: 25px;
}
.contd-products form {
  position: absolute;
  bottom: 0;
  right: 0;
}
.contd-products form button.single_add_to_cart_button {
  background-color: #3f3e40 !important;
  border-radius: 0 !important;
  padding: 2px 3px 1px 3px;
}
.contd-products form button.single_add_to_cart_button:hover {
  background-color: #e91f4a !important;
}
.contd-products .img-cov {
  margin-left: -5px;
}
.contd-products .inner-wrapper {
  height: 320px;
  background-size: cover !important;
  background-repeat: no-repeat;
  margin-bottom: 20px;
  position: relative;
  padding-right: 0;
  overflow: hidden;
}
.contd-products .inner-wrapper .content {
  display: block;
  height: 115px;
  position: absolute;
  color: #807f7f;
  left: 0;
  top: 100%;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px 100px;
  transition: top 0.5s;
  -webkit-transition: top 0.5s;
}
.contd-products .inner-wrapper .content h2 {
  color: #424243;
  font-size: 16px;
  line-height: 1;
}
.contd-products .inner-wrapper .content p {
  padding-right: 0;
  font-size: 11px !important;
}
@media (max-width: 992px) {
  .contd-products .inner-wrapper .content form {
    right: 15px;
  }
}
.contd-products .inner-wrapper:hover .content {
  top: 64%;
}
.gallary-image {
  margin-top: 25px;
}
.gallary-image .product-img {
  background-size: cover !important;
  background-repeat: no-repeat;
  height: 450px;
}
.product-des p {
  padding-right: 10px !important;
  font-size: 11px !important;
}
@media (max-width: 769px) {
  .product-des {
    padding: 40px;
  }
}
.related-products {
  margin-top: 25px;
  position: relative;
  height: 350px;
}
.related-products form {
  position: absolute;
  bottom: 0;
  right: 1px;
}
.related-products form button.single_add_to_cart_button {
  background-color: #3f3e40 !important;
  border-radius: 0 !important;
  padding: 2px 3px 1px 3px;
}
.related-products form button.single_add_to_cart_button:hover {
  background-color: #e91f4a !important;
}
.related-products h5 {
  font-weight: bold;
  margin-left: 100px;
  margin-bottom: 10px;
}
.related-products .inner-wrapper {
  background-size: cover !important;
  background-repeat: no-repeat;
  height: 350px;
}
.related-products .inner-wrapper .content {
  display: none;
  position: absolute;
  color: #807f7f;
  left: 0;
  bottom: 0;
  background-color: #dfdedd;
  padding: 20px 100px;
  opacity: 0.7;
  -webkit-transition-duration: 5s;
  -moz-transition-duration: 5s;
  -o-transition-duration: 5s;
}
.related-products .inner-wrapper .content h2 {
  color: #424243;
  font-size: 16px;
  line-height: 1;
}
.related-products .inner-wrapper .content p {
  padding-right: 0;
  font-size: 11px !important;
}
.related-products .inner-wrapper:hover .content {
  display: block;
}
.single_add_to_cart_button {
  background-color: #e91f4a !important;
}
.input-text.qty {
  height: 32px;
  border-radius: 5px;
  border: 1px solid #CCC;
  color: #424243;
}
#custom_filters .mid-nav-inner {
  padding-left: 130px !important;
}
.single-product #custom_filters .mid-nav-inner {
  padding-left: 0 !important;
}
form .transformSelect1 {
  border-right: 1px solid #e2e2e2;
}
.transformSelectDropdown li {
  display: block !important;
}
.woocommerce-cart a {
  color: #424243;
  font-size: 16px;
}
.woocommerce-cart a:hover {
  color: #e91f4a;
}
.woocommerce-cart table.cart img {
  width: 100px !important;
}
.woocommerce-cart .button {
  background-color: #e91f4a !important;
  color: #FFF !important;
  border-radius: 0 !important;
  padding: 2px 3px 1px 3px;
}
.woocommerce-cart .button:hover {
  opacity: 0.7;
}
.woocommerce-cart .shipping {
  display: none;
}
.woocommerce-page .cart-collaterals .cart_totals {
  width: auto !important;
  text-align: right;
}
.woocommerce-checkout-review-order-table img {
  width: 80px;
  height: 80px;
}
.woocommerce-billing-fields input,
.woocommerce-shipping-fields input {
  height: 25px;
  border: 1px solid #ccc;
  padding: 5px;
  color: #807f7f;
}
.woocommerce-billing-fields .select2-container .select2-choice,
.woocommerce-shipping-fields .select2-container .select2-choice {
  border-radius: 0;
  background: none;
  border: 1px solid #ccc;
  color: #807f7f;
}
.woocommerce-billing-fields .select2-container .select2-choice .select2-arrow,
.woocommerce-shipping-fields .select2-container .select2-choice .select2-arrow {
  border-radius: 0;
}
#ship-to-different-address input,
#ship-to-different-address label {
  display: inline;
  margin: 0;
  vertical-align: middle;
}
#shipping_method input {
  margin-right: 25px;
}
#shipping_method input[type="radio"]:checked {
  background-color: #e91f4a;
}
.page-content .woocommerce-checkout #payment {
  background: none;
  border: 1px solid #CCC;
  border-radius: 0;
}
.page-content .woocommerce-checkout #payment a {
  color: #e91f4a !important;
}
.page-content .woocommerce-checkout #payment div.payment_box {
  box-sizing: border-box;
  padding: 1em;
  margin: 1em 0;
  font-size: .92em;
  color: #515151;
  background: none;
  width: auto;
  position: static;
  display: inline-block;
}
.page-content .woocommerce-checkout #payment div.payment_box:before {
  border: none;
}
.page-content .woocommerce-checkout #payment .payment_method_paypal img,
.page-content .woocommerce-checkout #payment .payment_method_paypal .about_paypal {
  display: none;
}
.page-content .woocommerce-checkout #payment .button {
  background-color: #e91f4a !important;
  color: #FFF !important;
  border-radius: 0 !important;
  padding: 8px;
}
.page-content .woocommerce-checkout #payment .button:hover {
  opacity: 0.7;
}
.page-content .woocommerce-checkout #payment div.form-row {
  padding: 5px;
  padding-top: 10px;
}
.page-content .woocommerce-checkout #payment ul.payment_methods {
  padding: 5px 20px;
}
.page-content .woocommerce-checkout #payment .payment_box {
  display: none !important;
}
.page-content .woocommerce table.shop_table {
  border-radius: 0;
}
.woocommerce header {
  height: auto;
  background: #e91f4a;
  color: #FFF;
}
.woocommerce header h2,
.woocommerce header h3 {
  font-size: 16px;
  padding: 5px;
  line-height: 20px;
}
.woocommerce .order_details li {
  font-size: 13px !important;
  font-weight: bold;
}
.woocommerce .order_details a {
  color: #e91f4a !important;
}
.woocommerce .order_details strong,
.woocommerce .order_details td {
  font-weight: normal !important;
  font-size: 12px  !important;
}
.woocommerce .button {
  background-color: #e91f4a !important;
  color: #FFF !important;
  border-radius: 0 !important;
  padding: 8px;
}
.woocommerce .button:hover {
  opacity: 0.7;
}
.woocommerce .page-content {
  padding-top: 0;
}
.post-type-archive-product .head_section {
  margin: 10px !important;
}
html {
  overflow-x: hidden;
}
body {
  font-size: 15px;
  font-family: 'Helvetica';
  -webkit-font-smoothing: antialiased;
  line-height: 22px;
  letter-spacing: 1.5px;
  padding: 0 !important;
  overflow: hidden !important;
}
@media (max-width: 991px) {
  body {
    font-size: 13px;
    line-height: 18px;
  }
}
h1,
h2 {
  margin-top: 0;
}
h1 {
  font-size: 36px;
  font-family: 'bree serif';
  line-height: 36px;
  letter-spacing: 2px;
  margin-bottom: 0px;
}
@media (min-width: 700px) and (max-width: 1199px), (max-width: 700px) {
  h1 {
    font-size: 29px;
  }
}
h2 {
  font-size: 35px;
  font-family: 'bree serif';
  margin-bottom: 10px;
  letter-spacing: 1px;
  line-height: 35px;
}
@media (min-width: 700px) and (max-width: 1199px), (max-width: 700px) {
  h2 {
    font-size: 28px;
  }
}
p,
.footer-bar {
  font-size: 18px;
  font-family: 'Helvetica';
}
@media (min-width: 700px) and (max-width: 1199px), (max-width: 700px) {
  p,
  .footer-bar {
    font-size: 15px;
  }
}
.fl {
  float: left;
}
.sub-title {
  font-size: 14px !important;
  border-left: 2px solid gray;
  padding-left: 10px;
  margin-left: 10px;
  color: #807F7F;
}
.font-11 {
  font-size: 11px !important;
}
.mt10 {
  margin-top: 10px !important;
}
a:hover {
  text-decoration: none;
}
@-webkit-keyframes bounce-arrow-down {
  0%,
  20%,
  50%,
  80%,
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px);
  }
  60% {
    -webkit-transform: translateY(-1px);
    transform: translateY(-1px);
  }
}
@keyframes bounce-arrow-down {
  0%,
  20%,
  50%,
  80%,
  100% {
    -webkit-transform: translateY(5px);
    transform: translateY(5px);
  }
  40% {
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px);
  }
  60% {
    -webkit-transform: translateY(-4px);
    transform: translateY(-4px);
  }
}
.bounce-arrow-down {
  -webkit-animation: bounce-arrow-down 2s infinite;
  animation: bounce-arrow-down 2s infinite;
}
.fullheight {
  height: 100%;
}
.no-padding {
  padding: 0px;
}
.hideme {
  display: none;
}
.custom-dropdown {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  text-indent: 0.01px;
  text-overflow: '';
  padding-left: 5px;
  font-family: allerregular, arial;
  cursor: pointer;
  font-weight: bold;
  background: transparent url('../images/arrow.png') no-repeat center right;
}
.head_div {
  font-family: 'allerregular';
  height: 90px;
  background-color: #fff !important;
}
.head_div .logo {
  margin: 20px 50px;
  float: left;
}
@media (max-width: 850px) {
  .head_div .logo {
    margin-left: 28px;
    height: 50%;
  }
}
@media (max-width: 769px) {
  .head_div .logo {
    margin-top: 2px;
  }
}
.head_div .top-btn {
  float: right;
  display: inline;
}
.head_div .top-btn .btn-icon {
  font-size: 11px;
  width: 80px;
  background-color: #4c4b4c;
  border-radius: 0;
  color: #cecece;
  border: 1px Solid #6d6d6d;
  height: 30px;
  margin: 0;
  font-family: 'allerregular';
}
.yamm .yamm-content {
  padding: 10px 30px !important;
  padding-top: 15px !important;
}
.yamm .yamm-content a,
.yamm .yamm-content a:hover,
.yamm .yamm-content a:focus {
  background: transparent;
  font-weight: normal;
}
.yamm .yamm-content a {
  color: #0088CC;
}
.yamm .yamm-content a:hover,
.yamm .yamm-content a:focus {
  color: #005580;
}
.icon-bar {
  background-color: #4c4b4c;
  margin: 0 auto;
}
.menubutton {
  border: 1px Solid #cecece;
}
.yamm-content li {
  padding-bottom: 30px;
}
.loader {
  height: 100%;
  width: 100%;
  position: fixed;
  display: flex;
  z-index: 1000;
  align-items: center;
  justify-content: center;
}
.loader img {
  display: inline-block;
}
.transbg {
  height: 100%;
  width: 100%;
  background: black;
  opacity: 0.95;
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
.navbar {
  border: none;
}
.dropdown-menu {
  background-color: rgba(0, 0, 0, 0.9) !important;
  padding-top: 15px !important;
  border: none !important;
}
.dropdown-menu ul {
  width: 250px;
}
.dropdown-menu ul li {
  width: 250px;
}
.dropdown-menu a {
  color: #FFF !important;
}
#myNavbar {
  background: #272425;
  background: -moz-linear-gradient(0deg, #231F20 35%, #46464A 100%);
  background: -webkit-linear-gradient(0deg, #231F20 35%, #46464A 100%);
  background: -o-linear-gradient(0deg, #231F20 35%, #46464A 100%);
  background: -ms-linear-gradient(0deg, #231F20 35%, #46464A 100%);
  background: linear-gradient(0deg, #231F20 35%, #46464A 100%);
  max-height: 35px;
  width: 100%;
  position: absolute;
  left: 0;
}
#myNavbar a {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
#myNavbar .nav {
  margin-left: 50px;
  max-height: 35px;
  font-size: 12px;
}
#myNavbar .nav li a:focus {
  background-color: transparent !important;
}
@media (max-width: 900px) {
  #myNavbar .nav {
    margin-left: 0;
  }
}
#myNavbar .nav .dropdown-menu {
  padding: 1% 0 0.5% 8% !important;
}
#myNavbar .nav .dropdown-menu ul {
  border-right: 1px Solid rgba(255, 255, 255, 0.21);
  padding-left: 30px;
}
#myNavbar .nav .dropdown-menu ul:last-child {
  border-right: none;
}
@media (max-width: 850px) {
  #myNavbar .nav .dropdown-menu ul {
    padding-left: 5px;
    font-size: 9px;
  }
}
#myNavbar .nav .dropdown-menu ul li:last-child {
  border-right: none;
}
#myNavbar .nav .dropdown-menu li a:hover {
  color: #E9204A !important;
  background-color: transparent !important;
}
#myNavbar .nav li {
  max-height: 35px;
  overflow: hidden;
  width: 120px;
}
@media (max-width: 1200px) {
  #myNavbar .nav li {
    width: 80px;
  }
}
@media (max-width: 900px) {
  #myNavbar .nav li {
    width: auto;
  }
}
#myNavbar .nav li a {
  color: #cecece !important;
  margin: 0;
  padding-top: 8px;
  font-family: 'allerregular';
  font-size: 13px;
  letter-spacing: 0;
  transition: all 0.2s ease-in;
}
@media (max-width: 1200px) {
  #myNavbar .nav li a {
    font-size: 10px;
  }
}
@media (max-width: 900px) {
  #myNavbar .nav li a {
    font-size: 8px;
  }
}
#myNavbar .nav li a .caret {
  position: absolute;
  right: 8px;
  top: 13px;
  border: none !important;
  background: url('../images/arrow.png');
  width: 10px;
  height: 8px;
}
@media (max-width: 800px) {
  #myNavbar .nav li a .caret {
    right: 8px;
  }
}
#myNavbar .nav li:hover .dropdown-menu {
  background-color: rgba(0, 0, 0, 0.5);
  border-top: 1px solid #a0a0a0 !important;
}
#myNavbar .nav li:hover .dropdown-menu li:last-child {
  border-right: none;
}
#myNavbar .nav li:hover a {
  background-color: rgba(0, 0, 0, 0.3);
  color: #FFF;
}
#myNavbar .nav li:hover a:hover {
  color: red;
}
#myNavbar .nav li:hover a .caret {
  background: url('../images/arrow-hover.png');
}
#myNavbar .nav li:hover .topMenu {
  background-color: #E9204A !important;
  color: #fff !important;
  transition: all 0.2s ease-in;
}
#myNavbar .nav li:last-child {
  border-right: 1px Solid #6d6d6d;
}
@media (max-width: 850px) {
  #myNavbar .nav {
    font-size: 10px;
    margin-left: 30px;
  }
}
#myNavbar .nav .first {
  border-right: 1px Solid #6d6d6d;
}
.right-menu {
  color: #cecece;
  height: 35px;
}
.right-menu .nav-right {
  height: 35px;
  display: inline-flex;
  width: 100px;
  border-right: 1px Solid #484848;
}
@media (max-width: 1200px) {
  .right-menu .nav-right {
    width: 80px;
  }
}
.right-menu .nav-right a {
  color: #cecece;
  margin: 0;
  padding-top: 8px;
  font-family: 'allerregular';
  display: flex;
  font-size: 14px;
  letter-spacing: 0;
}
@media (max-width: 1200px) {
  .right-menu .nav-right a {
    font-size: 11px;
  }
}
.right-menu .nav-right .language_li {
  font-size: 16px;
  letter-spacing: 0;
  font-family: 'allerregular';
  height: 35px;
  position: absolute;
  top: 0;
  left: 0;
  width: 109px;
  padding-left: 12px;
  padding-top: 8px;
  cursor: pointer;
  background: transparent linear-gradient(0deg, #231F20 35%, #46464A 100%) repeat scroll 0% 0%;
}
.right-menu .nav-right .language_li:hover {
  background: #E9204A !important;
  color: #fff;
}
.tmenu {
  position: absolute;
  top: 0;
  right: 0;
  border-right: none !important;
  border-left: 1px solid #484848 !important;
  width: 110px !important;
  padding-left: 7px;
  padding-top: 2px;
}
.smenu {
  position: absolute;
  top: 0;
  right: 105px;
  padding-left: 20px;
}
.smenu:hover {
  background-color: #E9204A !important;
}
.smenu:hover a {
  color: #FFF;
}
.fmenu {
  position: absolute;
  top: 0;
  right: 200px;
  width: auto !important;
  padding-left: 10px;
  padding-right: 20px;
  position: relative;
}
.fmenu img {
  position: absolute;
  top: 5px;
  left: 0;
}
.fmenu:hover {
  background-color: #E9204A !important;
}
.fmenu:hover a {
  color: #FFF !important;
}
.fmenu span {
  margin-left: 10px;
}
.wrapper {
  margin-top: -35px;
  height: 80%;
}
@media (max-width: 769px) {
  .wrapper {
    height: 40%;
    margin-top: -25px;
  }
}
.wrapper .row {
  height: 100%;
}
.nopadding {
  padding-left: 0px;
  padding-right: 0px;
}
.nomargin {
  margin-left: 0px;
  margin-right: 0px;
}
#section1 {
  height: 10px !important;
}
#section1 .fp-tableCell {
  height: 10px !important;
  vertical-align: inherit;
  margin-top: 80px;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQUlEQVQYV4XMywkAIAwE0VhG7L81kzJWFBR/cef8mGRWoJqFlQDA3YThDtuN4QkZ3uAPXzDCT/jCITzxF66YwoErBChCl+FHYrwAAAAASUVORK5CYII=) repeat;
}
#section2 .fp-tableCell {
  vertical-align: inherit;
}
.owl-carousel .owl-item {
  height: 100%;
}
.owl-stage-outer,
.owl-stage {
  height: 100%;
}
#left-col-first {
  height: 100%;
  background-color: rgba(0, 0, 0, 0.05);
}
#left-col-first:hover #slider-1 h1 {
  color: #E9204A;
}
#left-col-first:hover #slider-1 h2 {
  color: #000;
}
@media (max-width: 769px) {
  #left-col-first {
    height: 40%;
    overflow: hidden;
  }
}
@media (max-width: 729px) {
  #left-col-first {
    height: 42%;
    overflow: hidden;
  }
}
#right-col-first {
  padding: 0;
  height: 83%;
}
@media (max-width: 769px) {
  #right-col-first {
    height: 52%;
    overflow: hidden;
  }
}
@media (max-width: 729px) {
  #right-col-first {
    height: 50%;
    overflow: hidden;
  }
}
#slider-1 {
  position: relative;
  top: 100px;
  width: 50%;
  height: 100%;
  margin-left: 100px;
}
@media (max-width: 769px) {
  #slider-1 {
    top: 30px;
    width: 70%;
    position: absolute;
  }
}
@media (max-width: 749px) {
  #slider-1 {
    top: 30px;
    width: 70%;
    position: absolute;
    margin-left: 0;
  }
}
#slider-1 .item h1 {
  color: #898B8E;
  font-family: 'bree serif';
}
#slider-1 .item h2 {
  color: #898B8E;
  font-family: 'bree serif';
}
#slider-1 .item p {
  color: #898B8E;
  font-family: 'bree serif';
}
#slider-2,
.owl-stage-outer,
.owl-stage {
  height: 100%;
}
#slider-2 .item {
  margin: 0px;
  height: 100%;
}
#slider-2 .item .overlay {
  display: none;
}
#slider-2,
#sri-image div {
  height: 100%;
  width: 100%;
}
#slider-2 .item img {
  max-width: none;
  width: auto;
  height: auto;
  min-width: 100%;
  min-height: 102%;
}
@media (max-width: 769px) {
  #slider-2 .item img {
    width: 100%;
  }
}
.overlay {
  position: absolute;
  top: 0px;
  left: 0px;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.4;
}
#section2,
#section3 {
  color: #898B8E;
}
.section .btn {
  background: transparent;
  color: #898B8E;
  border-radius: 24px;
  width: 136px;
  padding: 6px 10px;
  font-size: 14px;
  font-family: 'helvetica';
  margin-top: 30px;
  font-weight: bold;
  letter-spacing: 1px;
  transition: all 0.1s ease-in;
}
.section .btn:hover {
  background: #E9204A;
  color: #ffffff;
  transition: all 0.1s ease-in;
}
@media (min-width: 700px) and (max-width: 1199px), (max-width: 700px) {
  .section .btn {
    font-size: 15px;
    width: 150px;
  }
}
@media (max-width: 650px) {
  .section .btn {
    margin-top: 0;
  }
}
#threesecond,
#onesecond,
#onethird,
#threethird {
  background-color: #F5F5F5;
  padding-left: 5%;
  padding-top: 5%;
}
#twothird,
#fourthird {
  background-color: #E5E5E5;
  padding-left: 5%;
  padding-top: 5%;
}
.post-navigate {
  width: 100%;
  left: 0;
  text-align: center;
  display: block;
  position: absolute;
  bottom: -15px;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.post-navigate .btn {
  display: inline-block;
  padding-top: 5px;
  font-size: 15px;
  color: #FFF;
  background-color: #D1D2D1;
  height: 60px;
  width: 125px;
  border-radius: 100px 100px 0 0;
  transition: all 0.2s ease-in;
}
@media (min-width: 700px) and (max-width: 1199px), (max-width: 700px) {
  .post-navigate .btn {
    height: 50px;
    width: 100px;
    font-size: 10px;
  }
}
.pink {
  color: pink;
}
#fifthone {
  height: 50%;
}
#fifthtwo {
  background-color: #303030;
  height: 50%;
  color: #ffffff;
}
#fifththree {
  height: 25%;
  background: url(../images/bgs1.svg);
}
@media (max-width: 769px) {
  .navbar,
  #myNavbar,
  #myNavbar .nav {
    max-height: 1000px;
    margin-left: 0;
  }
  #myNavbar {
    z-index: 9;
  }
  .dropdown-menu {
    top: auto;
    min-height: 150px;
  }
  #myNavbar .nav li {
    max-height: none;
  }
  .menubutton {
    top: -60px;
    position: absolute;
    right: 0px;
    padding: 4px;
    font-size: 10px;
  }
  .menubutton a {
    color: #cecece;
  }
  .menubutton .icon-bar {
    background-color: #cecece;
  }
}
.navbar-nav .open .dropdown-menu {
  background-color: #8cc344 !important;
}
.navbar-nav .open a {
  background-color: #8cc344 !important;
  color: #FFF !important;
}
.img-container {
  overflow: hidden;
}
.img-container .outimg {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  -webkit-transition-duration: 5s;
  -moz-transition-duration: 5s;
  -o-transition-duration: 5s;
}
.quarter .semicircle,
.quarter2 .semicircle,
.odd .semicircle,
.even .semicircle {
  transition: all 0.2s ease-in;
}
.quarter:hover,
.quarter2:hover,
.odd:hover,
.even:hover {
  color: #353535;
}
.quarter:hover .semicircle,
.quarter2:hover .semicircle,
.odd:hover .semicircle,
.even:hover .semicircle {
  background-color: #e91f4a;
  border-color: #e91f4a;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -o-transform: scale(1);
  -webkit-box-shadow: 0px 10px 0px 1px #e91f4a;
  -moz-box-shadow: 0px 10px 0px 1px #e91f4a;
  box-shadow: 0px 10px 0px 1px #e91f4a;
  margin-bottom: 7px;
  transition: all 0.2s ease-in;
}
.quarter:hover .key,
.quarter2:hover .key,
.odd:hover .key,
.even:hover .key {
  color: #e9214b;
}
.quarter,
.quarter2,
.quarter3,
.quarter4 {
  height: 100%;
  overflow: hidden;
  padding: 0;
}
.quarter img,
.quarter2 img,
.quarter3 img,
.quarter4 img {
  height: 100%;
}
@media (max-width: 769px) {
  .quarter,
  .quarter2,
  .quarter3,
  .quarter4 {
    height: 50%;
    position: absolute;
    top: 0;
  }
  .quarter img,
  .quarter2 img,
  .quarter3 img,
  .quarter4 img {
    width: 100%;
    height: auto;
  }
  .quarter .small-text img,
  .quarter2 .small-text img,
  .quarter3 .small-text img,
  .quarter4 .small-text img {
    width: auto;
  }
}
@media (max-width: 769px) {
  .quarter2,
  .quarter4 {
    top: 50%;
  }
}
.quarter3 .key,
.quarter4 .key {
  color: #e9214b;
}
.quarter,
.quarter2 {
  background-color: #f4f5f5 !important;
}
.quarter:hover .overlay,
.quarter2:hover .overlay {
  display: none;
}
.section-container {
  padding: 0;
  background-size: cover;
}
.section-container .section-inner {
  padding: 80px 50px;
  position: relative;
  z-index: 3;
  height: 100%;
}
.section-container .section-inner .height_bound {
  height: 300px;
  overflow: hidden;
}
@media (max-width: 900px) {
  .section-container .section-inner {
    padding: 30px 20px;
    text-align: center;
  }
}
@media (max-width: 769px) {
  .section-container .section-inner {
    padding: 30px 30px;
    text-align: center;
  }
  .section-container .section-inner h1 {
    font-size: 28px;
  }
  .section-container .section-inner h2 {
    font-size: 20px;
  }
}
@media (max-width: 475px) {
  .section-container .section-inner {
    padding: 20px 30px;
    text-align: center;
  }
  .section-container .section-inner h1 {
    font-size: 20px;
    line-height: 24px;
  }
  .section-container .section-inner h2 {
    font-size: 16px;
    line-height: 20px;
  }
}
.section-container .small-text {
  margin-top: 20px;
}
.section-container .social-expand {
  float: left;
  display: none !important;
  margin-top: 20px !important;
}
.section-container .share-buttons {
  margin-top: 20px !important;
  float: left;
}
.section-container:hover .social-expand {
  display: block !important;
}
.section-container:hover .share-buttons {
  display: block !important;
}
.small-text {
  font-size: 14px;
  margin-top: 10px;
}
.small-text img {
  vertical-align: text-bottom;
  margin-right: 5px;
  margin-top: 1px;
}
.even,
.odd {
  background-color: #eaeae9;
}
.even:hover,
.odd:hover {
  color: #FFF;
}
#section3 .odd {
  background-color: #e5e5e4;
}
.transparent {
  width: 100%;
  height: 100%;
  background-color: #000;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 9;
  opacity: 0.7;
  display: none;
}
.img-wrap {
  height: 100%;
  position: absolute;
  width: 100%;
  z-index: 0;
  display: none;
}
.img-wrap img {
  position: absolute;
  width: 100%;
}
.img-wrap .wrap {
  background: #000;
  opacity: 0.3;
  width: 100%;
  min-height: 100%;
}
.bottom-container,
.bottom-container2 {
  height: 50%;
  position: absolute;
  top: 0;
  left: 0;
  color: #FFF;
  overflow: hidden;
}
.bottom-container {
  background-color: #4c4b4c;
}
.bottom-container .key {
  color: #fff !important;
  transition: all 0.2s ease-in;
}
.bottom-container:hover .key {
  color: #E9214B !important;
  transition: all 0.2s ease-in;
}
.bottom-container .section-inner {
  padding-top: 40px;
}
.bottom-container .section-inner .cover-wrap {
  width: 70%;
}
.bottom-container .section-inner .cover-wrap h1 {
  color: #FFF;
  margin-bottom: 10px;
}
.bottom-container .section-inner .cover-wrap h1 .key {
  color: #e9214b;
}
.bottom-container .section-inner .cover-wrap .btn {
  margin-bottom: 10px !important;
}
.bottom-container .section-inner .cover-wrap .semicircle {
  background-color: #686969;
  border-color: #686969;
}
.bottom-container .post-navigate {
  transition: all 0.2s ease-in !important;
}
.bottom-container:hover .post-navigate .semicircle {
  -webkit-box-shadow: 0px 10px 0px 1px #e9214b;
  -moz-box-shadow: 0px 10px 0px 1px #e9214b;
  box-shadow: 0px 10px 0px 1px #e9214b;
  margin-bottom: 5px;
  background-color: #e9214b;
  border: none;
  transition: all 0.2s ease-in;
}
.bottom-container2 {
  left: 50%;
  z-index: 9;
}
.bottom-container2 iframe {
  display: none;
}
.bottom-container2 .video-icon {
  position: absolute;
  top: 35%;
  left: 42%;
}
.htext {
  color: #e9214b;
}
.halfheight {
  height: 50%;
}
.quote-wrap {
  height: 100%;
  width: 100%;
  position: absolute;
  left: 0;
  z-index: 9;
  background-size: 0.5em,0.5em;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAARklEQVQYV4XQ2wkAIAwDQB1D91/NOkakguKjbfJ9JJAMAImkd0mZQUWl1BgupINu44lc+CITWuiDHrpghDZkaEKRBv2JZQDpyUKXo4UsOAAAAABJRU5ErkJggg==) repeat;
}
.quote-wrap .inner-wrap {
  height: 45%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(0, 0, 0, 0.05);
}
.quote-wrap .inner-wrap p {
  font-family: 'bree serif';
  margin: 0 auto;
  font-size: 24px;
  width: 30%;
  line-height: 25px;
  text-align: center;
}
#section4 .quote-wrap {
  top: 50%;
}
#section4 .section-container {
  height: 50% !important;
}
.quote-wrap .footer-bar {
  top: 50%;
  height: 55%;
  display: block;
  color: #FFF;
  align-items: left;
  justify-content: left;
  background-color: rgba(0, 0, 0, 0.75);
}
.quote-wrap .footer-bar a {
  color: #FFF;
  transition: all 0.2s ease-in;
}
.quote-wrap .footer-bar a:hover {
  color: #8cc344;
  transition: all 0.2s ease-in;
}
.quote-wrap .footer-bar h4 {
  background-color: #30302f;
  margin: 0;
  padding: 15px;
  font-size: 14px;
}
.quote-wrap .footer-bar ul {
  background-color: #4c4b4c;
  margin: 0;
  font-size: 11px;
  padding: 15px;
}
@media (max-width: 980px) {
  .quote-wrap .footer-bar .covers {
    left: 10%;
  }
}
@media (max-width: 769px) {
  .quote-wrap .footer-bar .covers {
    left: 0;
  }
}
.quote-wrap .footer-bar .footer-elements {
  padding: 0;
  padding-right: 5px;
  width: 20%;
  min-width: 180px;
}
.quote-wrap .footer-bar .footer-elements ul li {
  overflow: hidden;
}
.quote-wrap .footer-bar .footer-elements ul li a.ellipsis {
  height: 3em;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  width: 100%;
}
.quote-wrap .footer-bar .footer-elements ul li a.ellipsis:after {
  content: '...';
  position: absolute;
  right: 0;
  bottom: 0;
}
@media (max-width: 769px) {
  .quote-wrap .footer-bar .footer-elements {
    display: block;
    margin: 0;
    padding: 0;
    top: 0;
    position: relative;
    min-width: none;
    width: auto;
  }
}
.quote-wrap .footer-bar .social-block {
  min-width: 229px;
}
@media (max-width: 769px) {
  .quote-wrap .footer-bar .social-block {
    width: 25%;
  }
}
.quote-wrap .footer-bar .social-block h4 {
  display: inline-block;
  width: 24.5%;
  box-sizing: border-box;
  border-right: 1px solid #575656;
  text-align: center;
}
.quote-wrap .footer-bar .social-block h4 a {
  font-size: 20px;
}
.quote-wrap .footer-bar .social-block h4 a img {
  height: 20px;
}
.quote-wrap .footer-bar .social-block p {
  font-size: 14px;
  width: 98%;
  background-color: #4c4b4c;
  margin: 0;
  padding: 13px 17px;
  margin-bottom: 2px;
}
.quote-wrap .footer-bar .social-block .last {
  border: none;
}
.nav-icons {
  list-style-type: none;
  position: fixed;
  right: 40px;
  bottom: 0px;
  z-index: 100;
}
.nav-icons ul {
  list-style-type: none;
  margin-bottom: 0;
}
.nav-icons ul li {
  list-style-type: none;
  margin-bottom: 5px;
}
.nav-icons ul li a {
  background-color: #454446;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 35px;
  position: relative;
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 60px;
  text-align: center;
}
.nav-icons ul li a span {
  border-radius: 10px;
  color: #ffffff;
  font-size: 18px;
  display: block;
  top: 0;
  line-height: 22px;
  margin-top: 10px;
}
.nav-icons ul li a i {
  width: 22px;
  margin: 0 auto !important;
  margin-top: 0px !important;
}
.nav-icons ul li a img {
  width: 46%;
  height: auto;
  margin-top: 7px;
}
.nav-icons ul .plus a {
  background-color: #E8234B;
}
.nav-icons ul .subs a {
  width: auto;
  height: auto;
  padding: 2px !important;
}
.nav-icons ul .subs a span {
  margin: 0;
  font-size: 14px !important;
  width: 60px;
  letter-spacing: -1px !important;
}
.nav-icons .nav-links {
  position: absolute;
  bottom: 44px;
  right: -10px !important;
  margin-right: 0px;
}
.slider-caption {
  padding-right: 0px;
  padding-left: 0px;
  background-color: rgba(47, 47, 47, 0.2) !important;
}
.progressbar {
  height: 8px;
  position: absolute;
  width: 100%;
  bottom: 0;
  background: #E1E1E1;
}
#bar1,
#bar2,
#bar3 {
  background-color: #E8234B;
  height: 100%;
  width: 0px;
  padding-left: 0px;
  padding-right: 0px;
  -webkit-transition: width 4000ms;
  transition: width 4000ms;
}
.btn {
  background: transparent;
  color: #ffffff;
  border-radius: 24px;
  width: 136px;
  padding: 6px 10px;
  font-size: 14px;
  font-family: 'helvetica';
  margin-top: 30px;
  font-weight: bold;
  letter-spacing: 1px;
  transition: all 0.2s ease-in;
}
.btn:hover {
  background: #E9204A;
  color: #ffffff;
  border: none;
  transition: all 0.2s ease-in;
}
@media (min-width: 700px) and (max-width: 1199px), (max-width: 700px) {
  .btn {
    font-size: 15px;
    width: 150px;
  }
}
@media (max-width: 650px) {
  .btn {
    margin-top: 25px;
  }
}
.topbanner {
  height: 500px;
  background-color: #191919;
  color: #ffffff;
  width: 100%;
  margin-top: -35px;
}
.topbanner .header-text {
  margin: 3% 3%;
  margin-top: 6%;
}
.banner {
  width: 100%;
  background-size: cover !important;
  height: 500px;
}
.footer-h {
  height: 50% !important;
}
.footer {
  bottom: 0;
  margin-top: 150px;
}
@media (max-width: 769px) {
  .footer {
    text-align: center;
  }
}
.footer .footer-body {
  height: 335px;
  overflow: hidden;
}
.footer .copyrite {
  width: 100%;
  background-color: #303030;
  height: 25px;
  margin-top: -24px;
  color: gray;
  text-align: center;
  padding: 6px;
  position: absolute;
  z-index: 9;
}
.footer .copyrite p {
  font-size: 10px;
  margin: 0 45px;
}
.footer #fsection1 h4,
.footer #fsection2 h4 {
  line-height: 21px;
  font-weight: bold;
}
.footer #fsection1 li,
.footer #fsection2 li {
  padding-bottom: 10px;
}
@media (max-width: 769px) {
  .footer #fsection1,
  .footer #fsection2 {
    width: 50%;
  }
}
.footer #fsection1 ul,
.footer #fsection2 ul {
  height: 150px;
}
@media (max-width: 769px) {
  .footer #fsection1,
  .footer #fsection2 {
    box-sizing: border;
    border-right: 1px solid #575656;
  }
}
@media (max-width: 769px) {
  .footer .quote-wrap .footer-bar .social-block {
    width: 100%;
    min-width: 100%;
  }
}
@media (max-width: 769px) {
  .footer .quote-wrap .footer-bar .social-block h4 {
    width: 25%;
  }
}
@media (max-width: 769px) {
  .footer .quote-wrap .footer-bar .social-block p {
    width: 100%;
    margin-bottom: 0;
  }
}
.footer .quote-wrap .footer-bar .social-block .newsletter {
  box-sizing: border;
  border-bottom: 1px solid #575656;
  cursor: pointer;
  transition: all 0.2s ease-in;
}
@media (max-width: 769px) {
  .footer .quote-wrap .footer-bar .social-block .newsletter {
    box-sizing: border;
    border-bottom: 1px solid #575656;
  }
}
.footer .quote-wrap .footer-bar .social-block .newsletter:hover {
  color: #8cc344;
  transition: all 0.2s ease-in;
}
.home .footer {
  margin-top: 0;
}
.banner .banner-content {
  width: 350px;
  margin-left: 60px !important;
  padding-top: 50px;
  color: #FFF;
  margin-top: 3%;
}
.banner .banner-content h2 {
  margin-bottom: 20px !important;
}
.banner .banner-content p {
  margin-bottom: 0 !important;
}
#map {
  margin-top: 40px !important;
  width: 100%;
  height: 450px;
}
.page-content {
  padding-top: 80px;
}
.page-content h2 {
  font-size: 20px;
  font-weight: bold;
  font-family: 'helvetica';
}
.page-content p {
  color: #807f7f;
  line-height: 1.5;
  font-size: 13px;
}
.page-content .text-content img {
  display: block;
  width: 100%;
  height: auto;
}
.page-content .content .img-wrapper {
  height: inherit !important;
  overflow: hidden !important;
}
.page-content .content img {
  transform: scale(1);
  -webkit-transition: all 0.3s ease-in;
  -moz-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in;
}
.page-content .content:hover .img-wrapper img {
  transform: scale(1.1);
  -webkit-transition: all 0.3s ease-in;
  -moz-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in;
}
@media (max-width: 600px) {
  .mid-nav {
    display: none;
    visibility: hidden;
  }
}
.mid-nav {
  width: 100%;
  overflow: hidden;
  height: 35px;
  font-family: 'Helvetica';
  background-color: #f2f2f2;
  -webkit-box-shadow: 0px 6px 5px 0px rgba(221, 221, 221, 0.75);
  -moz-box-shadow: 0px 6px 5px 0px rgba(221, 221, 221, 0.75);
  box-shadow: 0px 6px 5px 0px rgba(221, 221, 221, 0.75);
}
.mid-nav ul {
  list-style: none;
}
.mid-nav ul li {
  display: inline-block;
}
.mid-nav .mid-nav-inner {
  overflow: hidden;
  height: 35px;
  padding-left: 50px;
}
.mid-nav .mid-nav-inner ul {
  height: 100%;
}
.mid-nav .mid-nav-inner ul li {
  padding-top: 10px;
  min-width: 185px;
  text-align: center;
}
.mid-nav .title {
  position: relative;
  left: 50px;
  width: 175px;
  margin-left: 50px;
  text-align: center;
  height: 100%;
  min-width: 140px;
  font-size: 14px;
  font-weight: bold;
  padding-right: 20px;
  border-right: 1px solid #e2e2e2;
  padding: 11px 0;
}
.mid-nav .title a {
  color: #807f7f;
  font-weight: bold;
}
.mid-nav .subpageMenu {
  height: 35px;
  border-right: 1px solid #e2e2e2;
  vertical-align: top;
  display: inline-block;
  padding: 0 30px;
  transition: all 0.2s ease-in;
}
.mid-nav .subpageMenu a {
  font-size: 14px;
  color: #807f7f;
  display: block;
}
.mid-nav .subpageMenu:hover {
  background-color: #c31439;
  transition: all 0.2s ease-in;
}
.mid-nav .subpageMenu:hover a {
  color: #FFF;
}
.mid-nav .active {
  background-color: #e91f4a;
}
.mid-nav .active a {
  color: #FFF;
}
.marquee-left {
  position: absolute;
  left: 0;
  cursor: pointer;
  z-index: 9;
}
.marquee-right {
  position: absolute;
  right: 0;
  cursor: pointer;
}
.page-template-resource .mid-nav {
  height: 120px;
  margin-bottom: 60px;
}
.page-template-resource .mid-nav .navbar-default {
  background-color: transparent;
}
.content-grid {
  padding-left: 0;
  margin-left: 7%;
}
.content-grid .content {
  margin-bottom: 50px;
  min-height: 375px !important;
}
@media (max-width: 690px) {
  .content-grid .content {
    min-height: auto !important;
  }
}
.content-grid .content .img-wrapper {
  height: 225px;
  max-height: 225px;
  overflow: hidden;
}
.content-grid .content .img-wrapper img {
  width: 100% !important;
}
.content-grid p,
.content-grid a {
  font-size: 12px;
  line-height: 1.5;
}
.content-grid a {
  color: #807f7f;
  font-size: 13px;
  font-weight: 600;
}
.content-grid a:hover {
  color: #e91f4a;
}
.content-grid .category {
  border-left: 2px solid #e91f4a;
  padding-left: 10px;
  line-height: 10px;
  margin-top: 10px;
  font-size: 10px;
}
.subhead {
  display: none;
  line-height: 1.5;
}
.subhead h2 {
  font-size: 20px !important;
  font-family: 'helvetica' !important;
}
.subhead a {
  color: #8cc344;
  transition: all 0.2s ease-in;
}
.subhead a:hover {
  color: #5a5a5a;
  transition: all 0.2s ease-in;
}
.first-sub-head {
  display: block;
}
#filter_div {
  height: 100px;
  background: #F8F8F8;
}
#filter_div .tag-filter-title {
  color: #777777;
  font-family: 'Helvetica Bold';
  margin-left: 125px;
  display: block;
  margin-bottom: 10px;
}
#filter_div .fetch_tag > li {
  list-style-type: none;
  position: relative;
  left: 110px;
}
#filter_div .fetch_tag > li a {
  color: #777777;
  font-family: 'Helvetica Bold';
}
#filter_div .fetch_tag > li a:hover {
  color: #e91f4a;
}
#filter_div-no-tag {
  height: 35px;
}
#filter_div ul {
  display: block;
}
#tag_filter_div {
  height: 100%;
  padding: 5px 5px;
  display: block;
  width: 100%;
  background: #F8F8F8;
  box-shadow: inset 0 3px 4px  #E8E8E8;
  margin-bottom: 5px;
  font-family: "bree serif";
}
#tag_filter_div ul > li {
  float: left;
  margin-left: 10px;
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 20px;
  font-size: 10px !important;
  width: auto;
  padding: 2px 10px;
  color: #fff;
  background-color: #E91F4A;
  list-style-type: none;
  text-transform: uppercase;
  text-align: center;
  cursor: pointer;
  transition: all 0.2s ease-in;
}
#tag_filter_div ul {
  margin-left: 10px;
}
#tag_filter_div ul .inactive {
  background: transparent;
  border: 1px solid #989898;
  color: #989898;
  font-size: 10px;
  margin-top: 10px;
  transition: all 0.2s ease-in;
}
.tag_select_wrapper {
  width: auto;
  display: block;
}
#custom_filters {
  width: auto;
  height: 35px;
  padding-left: 70px;
  background: #F2F2F2;
  font-size: 13px;
  letter-spacing: 0px;
  font-family: 'Helvetica';
}
#custom_filters span {
  color: #807f7f;
}
#custom_filters .filter_by {
  font-size: 15px;
  font-family: "helvetica";
  margin-bottom: 10px;
  padding-top: 10px;
  letter-spacing: 1px;
  font-weight: bold;
  float: left;
  padding-right: 30px;
}
#custom_filters .artist-filter {
  position: absolute;
  left: 527px;
  color: #575757 !important;
  font-weight: bold;
  padding: 10px 0px 5px 10px;
  border: 0px;
  height: 35px;
  border-radius: 0;
  width: 130px;
  text-decoration: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  -webkit-border-radius: 0px;
  background: #f2f2f2;
  border-right: 3px solid #e8e8e7;
}
#custom_filters .artist-filter:hover {
  color: #FFF !important;
  background: #E91F4A url('../images/arrow-hover.png') no-repeat center right;
}
#custom_filters form {
  float: left;
}
#custom_filters select {
  float: left;
  list-style-type: none;
  margin-left: 0px;
  color: #807f7f;
  font-weight: bold;
  padding: 7px 0px 5px 5px;
  border: 0px;
  border-left: 3px solid #E8E8E7;
  height: 35px;
  border-radius: 0;
  width: 130px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -webkit-border-radius: 0px;
  background: #f2f2f2 url('../images/arrow.png') no-repeat center right;
}
#custom_filters select:hover {
  color: #FFF;
  background: #E91F4A url('../images/arrow-hover.png') no-repeat center right;
}
#custom_filters select option {
  position: absolute;
  top: 0;
}
#custom_filters .btn {
  margin: 0px;
  background: #E91F4A;
  color: #ffffff;
  font-weight: normal;
  padding: 5px 0px 5px 5px;
  border-radius: 0px;
  transition: all 0.2s ease-in;
}
#custom_filters .btn:hover {
  background: #c31439;
  color: #ffffff;
  transition: all 0.2s ease-in;
}
#sliderEffects {
  width: 25%;
  float: right;
  height: 75px;
  font-size: 13px;
  letter-spacing: 0px;
  font-family: 'Helvetica';
}
#sliderEffects select {
  color: #807f7f;
  font-weight: bold;
  border: 0px;
  border-left: 3px solid #E8E8E7;
  height: 25px;
  border-radius: 0;
  -moz-appearance: none;
  -webkit-appearance: none;
  -webkit-border-radius: 0px;
  background: #f2f2f2 url('../images/arrow.png') no-repeat center right;
}
#sliderEffects select:hover {
  color: #FFF;
  background: #E91F4A url('../images/arrow-hover.png') no-repeat center right;
}
#sliderEffects .btn {
  margin: 0px;
  font-weight: normal;
  padding: 5px 0px 5px 5px;
  border-radius: 0px;
  transition: all 0.2s ease-in;
}
#sliderEffects .duration_div {
  position: absolute;
  right: 1%;
  top: 0;
  text-align: right;
}
#sliderEffects .duration_div input {
  width: 30px;
  text-align: center;
  margin-top: 5px;
}
#sliderEffects .duration_div .btn {
  width: auto;
  height: auto;
  background: #E91F4A;
  color: #ffffff;
  padding-top: 0;
  padding-bottom: 0;
  margin-right: 0px;
  padding-right: 2px;
  transition: all 0.2s ease-in;
}
.date_filter {
  display: inline;
  margin: 0px;
}
.date_filter .caret {
  float: right;
  margin-right: 10px;
  margin-top: 10px;
}
.date_filter .date_value {
  width: 200px;
  display: inline-block;
  cursor: pointer;
  background: #F2F2F2;
  font-family: 'Helvetica';
  padding: 5px 0px 5px 5px;
  border-left: 2px solid #E8E8E7;
  color: #868585;
  font-weight: bold;
  border-right: 2px solid #E8E8E7;
}
.date_filter .date_value_dropdown {
  position: absolute;
  z-index: 100000;
  height: auto;
  width: 200px;
  background: #F2F2F2;
  display: none;
}
.date_filter .date_value_dropdown span {
  clear: both;
  display: block;
}
.date_filter .date_value_dropdown button {
  width: 200px !important;
  margin: 2px 0px !important;
}
#project-map {
  height: 200px;
  width: 280px;
}
@media (max-width: 769px) {
  #project-map {
    margin: 0 auto;
    width: 100%;
  }
}
.social-buttons {
  color: #8cc344;
  font-family: 'allerregular';
  font-size: 14px;
}
.social-buttons span {
  margin-right: 15px;
}
.social-buttons ul.share-buttons {
  list-style: none;
  padding: 0;
  display: inline-block;
  border-left: 1px solid #f2f2f2;
  padding-left: 10px;
}
.social-buttons ul.share-buttons li {
  display: inline-block;
  margin-right: 10px;
}
.social-buttons ul.share-buttons li a {
  color: #b4b4b5;
}
.social-buttons ul.share-buttons li a:hover {
  color: #7bd93f;
}
.social-buttons ul.share-buttons li a i {
  font-weight: 800;
}
.side-wrap {
  border-bottom: 1px solid #f2f2f2;
  padding-bottom: 35px;
  margin-bottom: 35px;
}
.side-wrap.last {
  border-bottom: none;
}
.side-wrap a {
  color: #888888;
}
.side-wrap a:hover {
  color: #e91f4a;
}
.side-transparent-block {
  height: 150px;
  width: 280px;
  background-color: rgba(0, 0, 0, 0.8);
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  top: 0;
  left: 0;
  z-index: 9;
  display: none;
}
@media (max-width: 769px) {
  .side-transparent-block {
    width: 100%;
  }
}
.side-transparent-block input {
  display: block;
}
.side-transparent-block .close-info {
  position: absolute;
  right: 10px;
  color: #FFF;
  cursor: pointer;
}
form .btn {
  background: #E91F4A;
  border-radius: 0;
  font-weight: normal;
  font-family: 'Helvetica';
  color: #ffffff;
  transition: all 0.2s ease-in;
}
.jumpheading {
  color: #807f7f;
  font-size: 14px !important;
  font-weight: bold;
  font-family: 'bree serif';
}
.jumpmenu-ul {
  list-style: none;
  padding: 0;
  margin-bottom: 40px;
  width: 100%;
}
.jumpmenu-ul:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
.jumpmenu-ul .jump-menu {
  display: inline-block;
  width: 23%;
  padding: 5px 10px;
  background-color: #f6f6f6;
  float: left;
  margin: 0 10px 10px 0;
}
@media (max-width: 600px) {
  .jumpmenu-ul .jump-menu {
    width: 46% !important;
  }
}
.jumpmenu-ul .jump-menu a {
  color: #a2a1a1;
  font-weight: bold;
  display: block;
  font-size: 12px;
  text-align: center;
  transition: all 0.2s ease-in;
}
.jumpmenu-ul .jump-menu a:hover {
  color: #e91f4a;
  transition: all 0.2s ease-in;
}
.subhead {
  color: #807f7f;
  font-size: 13px;
  font-family: 'Helvetica';
  font-weight: 500;
}
.subhead h3,
.subhead h2 {
  color: #444;
  font-size: 20px !important;
  font-weight: bold;
  font-family: 'helvetica';
}
.info-wrap {
  margin-bottom: 40px;
  margin-top: 20px;
}
.sidebar {
  min-width: 300px;
}
@media (max-width: 690px) {
  .sidebar {
    min-width: 100%;
  }
}
#custom_filters ul.transformSelect {
  display: inline-block;
  margin-left: 0px;
  color: #807f7f;
  font-weight: bold;
  padding: 0;
  border: 0px;
  border-left: 1px solid #E8E8E7;
  height: 35px;
  border-radius: 0;
  width: 130px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  position: absolute;
  background: #f2f2f2 url('../images/dd-g.png') no-repeat center right;
  background-size: 15px;
  border-right: 10px solid transparent;
}
#custom_filters ul.transformSelect:hover {
  background: #c31439 url('../images/dd-w.png') no-repeat center right;
  background-size: 15px;
}
#custom_filters ul.transformSelect:hover span {
  color: #FFF;
}
#custom_filters ul.transformSelect:hover .transformSelectDropdown {
  display: block;
  -webkit-box-shadow: 1px 10px 28px -7px #544d54;
  -moz-box-shadow: 1px 10px 28px -7px #544d54;
  box-shadow: 1px 10px 28px -7px #544d54;
}
@media (max-width: 550px) {
  #custom_filters ul.transformSelect {
    width: 100px;
  }
}
.transformSelect2 {
  left: 265px;
}
.transformSelect3 {
  left: 394px;
  border-right: 1px solid #E8E8E7 !important;
}
.transformSelect3 .drop-on {
  display: block !important;
  z-index: 99 !important;
  margin-top: 0!important;
}
.transformSelect3 .drop-off {
  display: none !important;
  z-index: 1;
}
.transformSelect3 li span a:hover {
  color: #e91f4a !important;
}
.transformSelect33 {
  left: 394px;
  border-right: 1px solid #E8E8E7 !important;
}
#clickMe {
  position: absolute;
  left: 523px;
  height: 35px;
}
#clickMe:active {
  background-color: #C10A31;
}
#custom_filters .transformSelectDropdown {
  background-color: #FFF;
  margin-left: -1px;
  margin-top: 6px !important;
  display: none;
  font-size: 12px;
  padding-bottom: 30px;
}
#custom_filters .transformSelectDropdown span {
  color: #807f7f !important;
}
#custom_filters .transformSelectDropdown span:hover {
  color: #E91F4A !important;
}
#custom_filters .transformSelect span,
#custom_filters .transformSelect input[type=text] {
  background: none;
  border: none;
  padding: 8px 20px;
  padding-bottom: 0;
}
.page-wrap {
  margin-top: -35px;
}
#tag_filter_div {
  padding-top: 10px;
}
#tag_filter_div .active-tags {
  padding-left: 65px;
  font-size: 13px;
  font-weight: bold;
  padding-top: 5px;
  font-family: "helvetica";
  letter-spacing: 1px;
  line-height: 35px;
}
#tag_filter_div ul {
  position: absolute;
  display: inline;
}
#tag_filter_div ul li {
  font-family: 'helvetica';
  font-size: 12px;
  font-weight: bold;
}
.current-date {
  position: fixed;
  top: 40%;
  border-left: 10px solid #dbdbdb;
  left: 0;
  color: #b8b8b8;
  padding: 10px;
}
.current-date .cur-month {
  padding-left: 10px;
}
.transformSelect3 li {
  font-family: 'helvetica' !important;
}
.transformSelect3 li .transformSelectDropdown li span span {
  margin: 0;
  padding-left: 0 !important;
  display: block;
}
.transformSelect3 li .btn {
  display: block;
  margin-top: 25px !important;
  transition: all 0.2s ease-in;
}
.transformSelect3 li .dropdate-select {
  width: 45px !important;
  margin-right: 5px;
}
.transformSelect33 li {
  font-family: 'helvetica' !important;
}
.transformSelect33 li .transformSelectDropdown li span span {
  margin: 0;
  padding-left: 0 !important;
  display: block;
}
.transformSelect33 li .btn {
  display: block;
  margin-top: 25px !important;
  transition: all 0.2s ease-in;
}
.transformSelect33 li .dropdate-select {
  width: 45px !important;
  margin-right: 5px;
}
.sidediv h2 {
  font-size: 20px;
}
.alert-icon {
  position: absolute;
  top: 19px;
  height: 21px;
  width: 25px;
  right: 45px;
  z-index: 99999999;
}
.project-wrapper-right-wrap .small-text {
  margin-left: 15px;
}
.project-wrapper-right-wrap .alert-icon {
  right: 27px;
}
.navigation {
  visibility: hidden;
}
#infscr-loading {
  width: 100%;
  text-align: center;
}
.social-expand-buttons .social-expand {
  color: #FFF;
  background-color: transparent;
  height: 20px;
  width: 20px;
  display: inline-block;
  margin: 0 auto;
  cursor: pointer;
}
.social-expand-buttons ul.share-buttons {
  padding-left: 10px;
  display: none;
  border-left: none !important;
}
.shop-icon-menu {
  width: 20px !important;
  height: 20px !important;
}
.newsletter {
  cursor: pointer;
}
.wpcf7-form textarea {
  float: none;
}
.wpcf7-form input {
  padding: 5px;
}
.wpcf7-form .wpcf7-submit {
  background-color: #e91f4a !important;
  color: #FFF !important;
  border-radius: 0 !important;
  padding: 8px;
  border: none;
}
.wpcf7-form .wpcf7-submit:hover {
  opacity: 0.7;
}
@media (max-width: 991px) {
  #myNavbar .nav {
    font-size: 10px;
  }
  .right-menu .nav-right a {
    font-style: 12px;
  }
  .mid-nav {
    height: 30px;
  }
  .mid-nav img {
    height: 30px;
  }
}
@media (max-width: 769px) {
  .page-wrapper {
    padding: 10px;
  }
  .subhead {
    border-bottom: 1px solid #f6f6f6;
    padding-bottom: 50px;
  }
  .project-inner-page-content {
    text-align: center;
    padding-left: 30px;
    padding-right: 30px;
  }
  .mid-nav {
    height: 28px;
  }
  .mid-nav img {
    height: 28px;
  }
  .transformSelect2 {
    left: 140px;
  }
  .transformSelect3 {
    left: 270px;
  }
  .transformSelect33 {
    left: 270px;
  }
  #custom_filters {
    padding-left: 30px;
  }
  #clickMe {
    position: absolute;
    left: 400px;
    height: 35px;
  }
}
@media (max-width: 550px) {
  .transformSelect2 {
    left: 80px;
  }
  .transformSelect3 {
    left: 190px;
  }
  .transformSelect33 {
    left: 190px;
  }
  #custom_filters {
    padding-left: 0px;
  }
  #clickMe {
    position: absolute;
    left: 290px;
    height: 35px;
  }
}
.back-to-top {
  border: 2px solid #e91f4a;
  border-radius: 18px 18px;
  width: 36px;
  height: 36px;
  display: flex;
  margin-top: 50px;
  justify-content: center;
  cursor: pointer;
  align-items: center;
  margin-right: 40px;
  transition: all 0.2s ease-in;
}
.back-to-top i {
  color: #e91f4a;
  font-size: 32px;
  margin-left: 3px;
  margin-bottom: 15px;
}
.back-to-top:hover {
  background-color: #e91f4a;
  transition: all 0.2s ease-in;
}
.back-to-top:hover i {
  color: #fff;
}
.go-down {
  border: 2px solid #FFF;
  border-radius: 18px 18px;
  width: 36px;
  height: 36px;
  display: flex;
  justify-content: center;
  cursor: pointer;
  align-items: center;
  margin-right: 20px;
  position: absolute;
  z-index: 99;
  bottom: 10px;
  right: 0;
}
.go-down i {
  color: #FFF;
  font-size: 32px;
}
.go-down:hover {
  background-color: #E9204A;
  border: 2px solid #E9204A;
}
.drop {
  height: 5px;
  width: 100%;
  position: fixed;
  top: 0;
  margin: 0 auto;
  z-index: 99;
  text-align: center;
  display: none;
}
.nav-bar-fixed {
  position: fixed;
  top: 0;
  z-index: 9;
  width: 100%;
}
.resource-logo {
  position: fixed;
  right: 0;
  top: 250px;
}
@media (max-width: 769px) {
  .resource-logo {
    display: none;
  }
}
.mobile-nav {
  display: none;
}
@media (max-width: 1025px) {
  .mobile-nav {
    display: block;
  }
}
.yamm {
  display: block;
}
@media (max-width: 769px) {
  .yamm {
    display: none;
  }
}
.current-date {
  display: none;
}
.circle.bottom {
  position: absolute;
  bottom: -17px;
  left: 49.4%;
}
@media (max-width: 769px) {
  .circle.bottom {
    display: none;
  }
}
.circle.bottom .transformSelect144 {
  width: 10px !important;
}
.locale_entry {
  background-color: #e9e9e9;
}
.locale_entry label {
  margin: 20px auto;
  display: inline-block;
  float: left;
  clear: left;
  width: 250px;
  text-align: right;
}
.locale_entry input {
  display: inline-block;
  float: left;
  height: 20px;
  margin: 20px auto;
}
.locale_entry .btn {
  margin: 10px auto;
  float: initial;
  display: block;
  clear: both;
  transition: all 0.2s ease-in;
}
.locale_entry .warning {
  color: red;
}
.locale_entry .suggestion {
  color: yellow;
}
.locale_entry .green {
  color: green;
}
@media (max-width: 1025px) {
  .mobile-top-0 {
    top: 0 !important;
  }
  .mobile-bottom-0 {
    bottom: 0 !important;
  }
  .mobile-top-auto {
    top: auto !important;
  }
  .mobile-height-auto {
    height: auto !important;
  }
  #section-5 {
    height: 100vh !important;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAARklEQVQYV4XQ2wkAIAwDQB1D91/NOkakguKjbfJ9JJAMAImkd0mZQUWl1BgupINu44lc+CITWuiDHrpghDZkaEKRBv2JZQDpyUKXo4UsOAAAAABJRU5ErkJggg==) repeat;
    background-size: 20px 20px;
    position: relative;
  }
  .quote_wrapper {
    height: 15%;
    background: rgba(237, 237, 237, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .quote_wrapper .inner-wrap {
    height: 50%;
    width: 100%;
    display: flex;
    overflow: hidden !important;
    align-items: center;
    justify-content: center;
  }
  .quote_wrapper .inner-wrap p {
    font-family: 'bree serif';
    margin: 0 auto;
    color: #424243;
    font-size: 2em;
    line-height: 0.9em !important;
    width: 100%;
    line-height: 25px;
    text-align: center;
  }
  .who_we {
    height: 70%;
    background-color: rgba(0, 0, 0, 0.8);
    height: 100%;
    width: 100%;
    overflow: hidden;
  }
  .who_we .check_us {
    padding: 0px !important;
  }
  .who_we .check_us h1 {
    background: #2b2a2a !important;
    padding: 10% 10% !important;
    font-size: 1.5em !important;
    color: #f3f3f2 !important;
    margin-top: 5%;
  }
  .who_we ul {
    background-color: #454446;
    margin: 0px;
    font-size: 1em;
    padding: 5% 5% 15% 10% !important;
  }
  .who_we ul li {
    margin-top: 3% !important;
  }
  .who_we ul li a {
    color: #f3f3f2 !important;
    font-family: 'bree serif';
    font-weight: lighter;
  }
  .who_we .copyrite {
    width: 100%;
    background-color: #2b2a2a !important;
    height: auto;
    height: 8%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #9c9c9b;
    text-align: center;
    margin-top: 0%;
    font-size: 10px;
  }
  .who_we .copyrite p {
    font-size: 11px !important;
    margin: 0 15px;
  }
  .who_we .foot_wrapper {
    float: left;
    width: 100%;
    background-color: rgba(0, 0, 0, 0);
  }
  .who_we .foot_wrapper .social {
    width: 100%;
    margin: 0px !important;
    height: 30% !important;
    text-align: center;
  }
  .who_we .foot_wrapper .social h4 {
    background-color: #2b2a2a;
    display: inline-block;
    width: 20%;
    height: auto;
    padding-top: 4px;
    padding-bottom: 4px;
    box-sizing: border-box;
    border-right: 1px solid #575656;
    text-align: center;
  }
  .who_we .foot_wrapper .social h4 a {
    color: #ffffff;
  }
  .who_we .foot_wrapper .social h4 a i {
    font-size: 1.6em !important;
  }
  .who_we .foot_wrapper .social .last {
    border: none;
  }
  .who_we .foot_wrapper .newsletter {
    height: 20%;
  }
  .who_we .foot_wrapper .newsletter p {
    font-size: 1.5em;
    font-weight: bold;
    color: #f3f3f2 !important;
    background-color: #4c4b4c;
    margin: 0;
    text-align: center;
    padding: 16px 17px;
    margin-bottom: 2px;
  }
  .who_we .foot_wrapper .donate {
    height: 20%;
  }
  .who_we .foot_wrapper .donate p {
    font-size: 1.5em;
    font-weight: bold;
    color: #f3f3f2 !important;
    background-color: #4c4b4c;
    margin: 0;
    text-align: center;
    padding: 16px 17px;
    margin-bottom: 2px;
  }
  .nav-icons {
    list-style-type: none;
    position: fixed;
    right: 40px;
    bottom: 0px;
    z-index: 100;
  }
  .nav-icons .plus a {
    width: 50px !important;
    height: 50px !important;
  }
  .nav-icons ul {
    list-style-type: none;
    margin-bottom: 0;
  }
  .nav-icons ul li {
    list-style-type: none;
    margin-bottom: 5px;
  }
  .nav-icons ul li a {
    background-color: #454446;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 35px;
    position: relative;
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 60px;
    text-align: center;
  }
  .nav-icons ul li a span {
    border-radius: 10px;
    color: #ffffff;
    font-size: 18px;
    display: block;
    top: 0;
    line-height: 22px;
    margin-top: 10px;
  }
  .nav-icons ul li a i {
    width: 22px;
    margin: 0 auto !important;
    margin-top: 0px !important;
  }
  .nav-icons ul li a img {
    width: 46%;
    height: auto;
    margin-top: 7px;
  }
  .nav-icons ul .plus a {
    background-color: #E8234B;
  }
  .nav-icons ul .subs a {
    width: auto;
    height: auto;
    padding: 2px !important;
  }
  .nav-icons ul .subs a span {
    margin: 0;
    font-size: 14px !important;
    width: 60px;
    letter-spacing: -1px !important;
  }
  .nav-icons .nav-links {
    position: absolute;
    bottom: 44px;
    right: -10px !important;
    margin-right: 0px;
  }
  .logo {
    margin-top: 20px !important;
  }
  .mobile-text-center {
    text-align: center !important;
  }
  .mobile-no-padding {
    padding: 0px !important;
  }
  .mobile-no-padding p {
    padding: 0px !important;
  }
  .mobile-no-margin {
    margin: 0px !important;
  }
  .mobile-para-padding-child-p p {
    padding-left: 30px !important;
    padding-right: 30px !important;
  }
  .mp30 {
    padding: 30px !important;
  }
  .mobile-para-padding {
    padding-left: 30px !important;
    padding-right: 30px !important;
  }
  .mobile-fullwidth {
    width: 100% !important;
  }
  .mobile-height-auto {
    height: auto !important;
  }
  .mobile-height-0 {
    height: 0px !important;
  }
  .head_section {
    height: 75px;
    z-index: 9999;
  }
  .mobile-padding-child {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  .topbanner h2 {
    line-height: 25px !important;
    padding-top: 72px !important;
  }
  .banner-content {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  .banner-content h2 {
    line-height: 25px !important;
    padding-top: 72px !important;
  }
  .mobile-mid-nav-inner {
    text-align: center;
  }
  .mobile-mid-nav-inner .mobile-filter-active {
    cursor: pointer;
    background-color: #ccc;
    color: gray;
    font-weight: bold;
    -webkit-box-shadow: 0px 6px 5px 0px rgba(221, 221, 221, 0.75);
    -moz-box-shadow: 0px 6px 5px 0px rgba(221, 221, 221, 0.75);
    box-shadow: 0px 6px 5px 0px rgba(221, 221, 221, 0.75);
    padding: 15px 2px;
    position: relative;
  }
  .mobile-mid-nav-inner .mobile-filter-active span {
    margin: 10px;
    position: absolute;
    right: 30%;
    bottom: 11px;
  }
  .mobile-mid-nav-inner .mobile-filter-dropdown {
    display: none;
  }
  .mobile-mid-nav-inner .mobile-filter-dropdown .mobile-filter-item {
    background-color: #f2f2f2;
    padding: 15px 0px;
    text-decoration: none;
    list-style-type: none;
    border: 1px solid rgba(221, 221, 221, 0.6);
  }
  .mobile-mid-nav-inner .mobile-filter-dropdown .mobile-filter-item a {
    color: gray;
  }
  .mobile_project_filter {
    width: 100%;
  }
  .mobile_project_filter select {
    width: 100% !important;
  }
  .mobile-timeline-header {
    margin: 40px;
    text-align: center;
  }
  .cd-timeline-content {
    width: 98% !important;
    margin: 1% !important;
  }
  .cd-timeline-content .content {
    height: 260px !important;
    overflow: hidden !important;
  }
  #mobile_custom_filters {
    width: 100%;
    padding: 10px !important;
    text-align: center;
    background: #F2F2F2;
    font-size: 13px;
    letter-spacing: 0px;
    font-family: 'Helvetica';
  }
  #mobile_custom_filters .filter_by {
    font-size: 15px;
    font-family: "helvetica";
    letter-spacing: 1px;
  }
  #mobile_custom_filters select {
    list-style-type: none;
    margin-left: 0px;
    color: #807f7f;
    font-weight: bold;
    padding: 7px 0px 5px 5px;
    border: 0px;
    border-left: 3px solid #E8E8E7;
    height: 35px;
    border-radius: 0;
    width: 130px;
    -moz-appearance: none;
    -webkit-appearance: none;
    -webkit-border-radius: 0px;
    background: #f2f2f2 url('../images/arrow.png') no-repeat center right;
  }
  #mobile_custom_filters select option {
    position: absolute;
    top: 0;
  }
  #mobile_custom_filters .gallery_filter_item {
    cursor: pointer;
    background-color: #ccc;
    color: gray;
    font-weight: bold;
    -webkit-box-shadow: 0px 6px 5px 0px rgba(221, 221, 221, 0.75);
    -moz-box-shadow: 0px 6px 5px 0px rgba(221, 221, 221, 0.75);
    box-shadow: 0px 6px 5px 0px rgba(221, 221, 221, 0.75);
    padding: 15px 2px;
    position: relative;
    border-bottom: 1px solid gray;
  }
  #mobile_custom_filters .gallery_filter_item span {
    margin: 10px;
    position: absolute;
    right: 30%;
    bottom: 11px;
  }
  #mobile_custom_filters .gallery_filter_item a {
    color: gray;
  }
  .archive .foot_wrapper .social {
    height: auto !important;
  }
  .archive .foot_wrapper .newsletter {
    height: auto !important;
  }
  .archive .foot_wrapper .donate {
    height: auto !important;
  }
  .page .foot_wrapper p {
    padding: 20px !important;
  }
  .content-grid {
    margin: 2% !important;
  }
  .page-template-page-news .page-wrap,
  .page-template-page-artist .page-wrap {
    margin-top: 130px;
  }
  .page-template-page-news .page-wrap .banner-content,
  .page-template-page-artist .page-wrap .banner-content {
    float: inherit;
  }
  .page-template-page-resource .img-wrapper img {
    width: 98% !important;
    margin: 1% !important;
  }
}
@media (max-width: 1025px) and (max-width: 1024px) {
  #section-5 {
    height: auto !important;
  }
}
@media (max-width: 1025px) and (max-width: 600px) {
  .cd-timeline-content .content {
    height: auto;
  }
}
@media (max-width: 1025px) and (max-width: 1024px) {
  .page-template-page-news .page-wrap,
  .page-template-page-artist .page-wrap {
    margin-top: 30px;
  }
}
@media (max-width: 1025px) and (max-width: 1025px) {
  .page-template-page-news .page-wrap .banner-content h2,
  .page-template-page-artist .page-wrap .banner-content h2 {
    padding-top: 0px !important;
  }
}
@media screen and (orientation: landscape) and (max-width: 1025px) {
  .content-grid {
    text-align: center;
  }
  .who_we .check_us {
    width: 48% !important;
    margin-left: 2% !important;
    margin-top: 1% !important;
  }
  .who_we .check_us h1 {
    margin: 0px !important;
    padding: 0px !important;
    height: 50px !important;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .who_we .check_us ul {
    height: 196px !important;
  }
  .who_we .foot_wrapper {
    width: 47.5% !important;
    float: left;
    margin: 0px !important;
    margin-left: 0.5% !important;
  }
  .who_we .foot_wrapper .social {
    margin-top: 2% !important;
    height: 50px !important;
    float: left;
  }
  .who_we .foot_wrapper .social h4 {
    float: left;
    height: 100%;
    width: 25%;
    margin: 0px !important;
    padding: 0px !important;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .who_we .foot_wrapper .newsletter {
    float: left;
    width: 100%;
    height: 97px !important;
  }
  .who_we .foot_wrapper .newsletter p {
    font-size: 16px;
    height: 100%;
    background-color: #454446 !important;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .who_we .foot_wrapper .donate {
    float: left;
    width: 100%;
    height: 97px !important;
    margin-top: 2px;
  }
  .who_we .foot_wrapper .donate p {
    font-size: 16px;
    height: 100%;
    background-color: #454446 !important;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .who_we .copyrite {
    position: absolute;
    bottom: 0;
    margin-bottom: 0 !important;
  }
}
.newsletter {
  cursor: pointer;
}
.newsletter-popup {
  position: fixed;
  top: 0;
  width: 100%;
  height: 100%;
  right: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 99;
  display: none;
}
.newsletter-popup .close-newsletter {
  color: #FFF;
  position: absolute;
  right: 10px;
  top: 10px;
  font-size: 16px;
  cursor: pointer;
}
.newsletter-popup label {
  color: #FFF;
}
.newsletter-popup input {
  height: 25px;
  border: 1px solid #ccc;
  padding-bottom: 0px !important;
  color: #807f7f;
}
.newsletter-popup .button {
  background-color: #e91f4a !important;
  color: #FFF !important;
  border-radius: 0 !important;
}
.newsletter-popup .button:hover {
  opacity: 0.7;
}
.wpcf7-form textarea {
  float: none;
}
.wpcf7-form .wpcf7-submit {
  background-color: #e91f4a !important;
  color: #FFF !important;
  border-radius: 0 !important;
  border: none;
}
.wpcf7-form .wpcf7-submit:hover {
  opacity: 0.7;
}
.qtranxs-available-languages-message {
  display: none !important;
}
.grid-gallery-thumbnail-box {
  text-align: center;
  margin-bottom: 40px;
  overflow: hidden;
}
.grid-gallery-thumbnail-box .image_wrapper {
  margin-bottom: 40px;
}
.grid-gallery-thumbnail-box ul {
  margin: 0 auto;
  text-align: center;
}
.js-photostack {
  position: relative;
}
.js-photostack > * {
  position: absolute;
  top: 0;
  left: 0;
  list-style-type: none;
}
#swipebox-container #swipebox-top-bar {
  top: auto;
  bottom: 100px;
  background: transparent;
  text-shadow: 2px 2px 6px #969696;
}
#swipebox-container #swipebox-bottom-bar {
  bottom: -50px;
}
.nav li a:hover {
  background-color: transparent !important;
}
.btn-shop {
  width: auto !important;
  padding: 6px 15px !important;
  color: #fff !important;
  transition: all 0.2s ease-in;
}
p.fix-h {
  height: 85px !important;
  overflow: hidden !important;
}
#section3 .section-container:hover a.btn {
  color: #fff !important;
  transition: all 0.2s ease-in;
}
.btn:hover {
  border: 1px solid transparent !important;
  transition: all 0.2s ease-in;
}
.side-column {
  margin-left: 50px;
}
@media (max-width: 1024px) {
  .side-column {
    margin: 0 auto !important;
  }
}
.side-column a {
  color: #807f7f;
  transition: all 0.2s ease-in;
}
.side-column a:hover {
  color: #e91f4a;
  transition: all 0.2s ease-in;
}
.days-of-the-week .header-day {
  font-weight: bold !important;
}
.days .day.today {
  background-color: #8cc344 !important;
  border: none;
}
a.news-btn {
  font-size: 13px;
  margin-top: 15px !important;
  transition: all 0.2s ease-in;
}
a.news-btn:hover {
  transition: all 0.2s ease-in;
}
.content h4,
.content h2 {
  margin-top: 20px;
  font-weight: bold;
}
@media (min-width: 1170px) {
  .cd-timeline-block.first .project-wrapper-right::after {
    top: 25% !important;
    z-index: 999999;
  }
}
.popup .content {
  background-color: rgba(57, 57, 57, 0.5);
}
.popup .content .close-info i {
  color: #fff;
  font-size: 16px;
  font-weight: 200;
}
img.outimg {
  min-width: 20px !important;
}
.description-wrap {
  padding-top: 25px;
}
.description-wrap h2 {
  margin-bottom: 0 !important;
}
.description-wrap h4 {
  font-size: 15px;
  margin-top: 5px;
}
.lower-discription-wrap h4 {
  font-size: 15px;
}
.lower-discription-wrap button.button.single_add_to_cart_button {
  height: 32px !important;
  transition: all 0.2s ease-in;
}
.lower-discription-wrap button.button.single_add_to_cart_button:hover {
  background-color: #C1052D;
  transition: all 0.2s ease-in;
}
.quantity {
  margin-right: -1px !important;
}
.quantity input {
  border-radius: 0px !important;
  width: 50px !important;
  height: 30px !important;
}
.related-products {
  margin-top: 50px;
}
.related-products h5 {
  margin-bottom: 25px;
  font-size: 18px;
}
.related-products .inner-wrapper .content {
  transition: all 0.3s ease-in;
}
.related-products .inner-wrapper:hover .content {
  opacity: 0.8;
  transition: all 0.3s ease-in;
  background-color: #fff;
}
.featured .col-md-8 {
  padding-right: 25px !important;
}
.featured .col-md-4 {
  padding: 0 !important;
}
.featured .product-item .content {
  height: 137px !important;
}
.featured .product-item:hover .content {
  top: 69.5% !important;
}
.featured .col-md-4 .product-img {
  z-index: -9;
}
.product-item .content {
  padding: 8px 40px !important;
}
.contd-products .inner-wrapper {
  margin-bottom: 30px !important;
}
.contd-products .inner-wrapper .content {
  height: 137px !important;
}
.contd-products .inner-wrapper:hover .content {
  top: 57.5% !important;
}
.contd-products .content {
  padding: 8px 40px !important;
}
.leaflet-bottom.leaflet-right {
  display: none !important;
  visibility: hidden !important;
}
.leaflet-bar,
.leaflet-control-layers:hover {
  border: none !important;
  border-color: transparent !important;
  border-radius: 0 !important;
  box-shadow: none !important;
}
.leaflet-bar a:hover {
  background-color: #E91F4A !important;
  color: #fff !important;
  font-weight: bold !important;
}
.leaflet-bar a:first-child {
  border-radius: 0 !important;
}
.leaflet-bar a:last-child {
  border-radius: 0 !important;
}
#custom_filters li span a {
  color: #666666;
}
.project-wrapper-right::before {
  left: 0 !important;
  height: 104px !important;
  z-index: 999999;
}
.project-wrapper-right::after {
  left: 0 !important;
}
.project-wrapper-right-wrap .alert-icon {
  right: 7px !important;
  top: 0 !important;
}
.project-wrapper-left::before {
  right: 0 !important;
  height: 117px !important;
  z-index: 99999;
}
.project-wrapper-left::after {
  right: 0 !important;
}
.project-wrapper-left-wrap .alert-icon {
  right: 20px !important;
  top: 0 !important;
}
.info-wrap .bold {
  font-weight: bold;
}
p {
  font-family: 'Helvetica' !important;
}
.img-wrapper-icons {
  width: 50px;
  height: 50px;
  overflow: hidden;
}
.img-wrapper-icons img {
  width: inherit;
  height: inherit;
}
.paragraph {
  font-size: 13px;
  line-height: 20px;
}
@media (max-width: 600px) {
  .single_slider .owl-dots {
    top: 375px !important;
  }
}
.cd-timeline-content .content {
  width: 100% !important;
}
.product-item {
  height: auto !important;
}
.product-item .lower-description-wrap h4 {
  font-size: 15px;
}
.product-item .product-img {
  float: left !important;
}
.gallary-image .product-img {
  margin-bottom: 25px !important;
}
.related-products .inner-wrapper {
  margin-bottom: 25px !important;
}
@media (max-width: 690px) {
  .related-products .inner-wrapper .content {
    padding: 20px !important;
    width: 100%;
  }
}
.social-buttons li:first-child {
  margin-left: 10px;
}
.social-buttons li img {
  width: 20px !important;
}
.modal-container {
  position: relative;
  width: 40%;
  height: 300px;
  text-align: center;
  background-color: rgba(47, 47, 47, 0.5);
  margin: 0 auto;
  padding-top: 50px;
  z-index: 999999;
}
.modal-container h1 {
  font-size: 20px;
  color: #fff;
}
.modal-container form {
  margin-top: 25px;
}
.modal-container .form-footer {
  width: 250px;
  margin: 0 auto !important;
}
.modal-container input {
  text-align: center;
  height: 40px;
  width: 250px;
  margin: 20px 0;
  font-size: 12px;
  font-weight: normal;
}
.modal-container input[type="submit"] {
  border: none;
  font-family: 'Helvetica';
  font-size: 14px;
  letter-spacing: 1px;
}
.nav-icons {
  top: 0;
}
.nav-icons .nav-links {
  background-color: rgba(47, 47, 47, 0.8);
  width: 145px;
  right: -40px !important;
  padding-top: 96px !important;
  top: 0 !important;
  padding: 10px 10px 0;
  transform: translateX(150px);
  transition: all 0.2s ease-in;
}
.nav-icons .nav-links .subs {
  border-bottom: 1px solid #5a5a5a;
}
.nav-icons .nav-links .subs a {
  background-color: transparent;
  padding: 5px 0 !important;
  width: 100% !important;
}
.nav-icons .nav-links .subs a span {
  width: 100% !important;
  text-transform: capitalize;
  letter-spacing: 1px !important;
}
.nav-icons .nav-links.show-it {
  transform: translateX(0px);
  transition: all 0.3s ease-in;
}
.nav-icons .nav-btn {
  position: absolute;
  top: 25px !important;
  right: 7px;
}
.nav-icons .nav-btn .bb,
.nav-icons .nav-btn .bb-f,
.nav-icons .nav-btn .bb-l {
  border-bottom: 2px solid #fff;
  width: 26px;
  margin-top: 6px;
  margin-left: 12px;
  transition: all 0.1s ease-in;
}
.nav-icons .nav-btn .plus > a > span {
  margin-top: 17px;
}
.nav-icons .nav-btn.show-it .plus > a > span {
  margin-top: 24px;
}
.nav-icons .nav-btn.show-it .bb {
  display: none;
  visibility: hidden;
}
.nav-icons .nav-btn.show-it .bb-f {
  transform: rotate(45deg);
  margin-top: 19px;
  transition: transform 0.2s ease-in;
}
.nav-icons .nav-btn.show-it .bb-l {
  transform: rotate(-45deg);
  margin-top: -2px;
  transition: transform 0.2s ease-in;
}
@media (min-width: 1025px) {
  .wpcf7-form {
    position: relative;
    margin: 50px 0 70px;
  }
  .wpcf7-form p input,
  .wpcf7-form p textarea {
    width: 500px;
  }
  .wpcf7-form p textarea {
    height: 157px;
    border-radius: 0px;
  }
  .wpcf7-form p input[type="submit"] {
    background: transparent !important;
    color: #ffffff !important;
    border-radius: 24px !important;
    width: 136px !important;
    padding: 6px 10px !important;
    font-size: 14px !important;
    font-family: 'helvetica' !important;
    margin-top: 30px !important;
    font-weight: bold !important;
    letter-spacing: 1px !important;
    color: #898B8E !important;
    border: 1px solid #898B8E;
    transition: all 0.2s ease-in;
  }
  .wpcf7-form p input[type="submit"]:hover {
    border-color: #e91f4a !important;
    background: #e91f4a !important;
    opacity: 1;
    color: #fff !important;
    transition: all 0.2s ease-in;
  }
  .wpcf7-form p:nth-child(5) {
    position: absolute;
    right: 0;
    top: 0 ;
  }
  .wpcf7-form p:nth-child(6) {
    position: absolute;
    right: -20px;
    bottom: -70px;
  }
}
@media (max-width: 1025px) {
  .wpcf7-form p input,
  .wpcf7-form p textarea {
    width: 100%;
  }
}
.no-padding {
  margin-left: 0 !important;
  margin-right: 0 !important;
}
.footer-home .quote-wrap {
  position: absolute;
  top: 50% !important;
  height: 102% !important;
  overflow: hidden !important;
}
.footer-home .quote-wrap .copyrite {
  margin: 0 !important;
  position: absolute;
  bottom: 0px;
}
.leaflet-control-zoom a {
  text-indent: -50000px;
}
.progressbar .bar {
  background-color: #b7b7b7;
  margin-right: 5px;
  width: 32.5%;
}
button.button.alt.single_add_to_cart_button:hover {
  opacity: 1;
}
.price {
  position: absolute;
  bottom: 15px;
}
.col-md-8.img-cov form {
  right: 5px !important;
}
.featured .product-img {
  padding: 0 !important;
  overflow: hidden !important;
}
.featured .product-img .product-img-inside {
  width: 100%;
  height: inherit;
  background-size: cover !important;
  transform: scale(1);
  transition: transform 0.3s ease-in;
}
.featured .product-item:hover .product-img-inside {
  transform: scale(1.1);
  transition: transform 0.3s ease-in;
}
.contd-products .inner-wrapper {
  padding: 0 !important;
}
.contd-products .inner-wrapper .product-img {
  height: inherit;
  width: 100%;
  transform: scale(1);
  transition: all 0.3s ease-in;
  background-size: cover !important;
}
.contd-products .inner-wrapper .product-img:hover {
  transform: scale(1.1);
  transition: all 0.3s ease-in;
}
.project-wrapper {
  overflow: hidden;
}
.project-wrapper .img-cover {
  overflow: hidden;
}
.project-wrapper .project-img {
  height: 200px;
  background-size: cover;
  transition: all 0.1s ease-in;
  overflow: hidden;
}
.project-wrapper .project-img .overlay {
  background-color: #e91f4a;
  height: inherit;
  width: 98.4%;
}
@media (max-width: 1025px) {
  .project-wrapper .project-img .overlay {
    display: none;
    visibility: hidden;
  }
}
.cd-timeline-content:hover .project-img {
  transform: scale(1.1);
}
.cd-timeline-content:hover .project-img .overlay {
  background-color: transparent;
  transition: all 0.2s ease-in;
}
.ellipsis {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.cd-timeline-content.hover .project-img {
  transform: scale(1.1);
}
.cd-timeline-content.hover .project-img .overlay {
  background-color: transparent;
  transition: all 0.2s ease-in;
}
.popup .content {
  height: 300px;
  width: 40%;
}
.popup .content h1 {
  font-size: 20px;
  color: #fff;
  margin-top: 50px;
}
.popup .content form {
  width: 250px !important;
  margin: 0 auto;
}
.popup .content form input {
  width: 100%;
  margin: 20px 0 !important;
}
.cd-timeline-block {
  margin: 95px 0 !important;
}
.cd-timeline-block .cd-picture {
  transition: all 0.2s ease-in;
}
.cd-timeline-block:hover .cd-picture {
  transition: all 0.2s ease-in;
}
.cd-timeline-block.first {
  margin-top: 0 !important;
}
p.category {
  text-transform: uppercase;
}
.page-wrapper .banner-content {
  margin-top: 0px !important;
}
@media (max-width: 1024px) {
  #cd-timeline::before {
    visibility: hidden;
    display: none;
  }
}
@media (max-width: 1024px) {
  .archive #section-5 {
    height: 37% !important;
  }
}
@media (max-width: 600px) {
  .archive #section-5 {
    height: 480px !important;
  }
}
.video-wrap {
  height: 100% !important;
}
.video-img {
  height: inherit !important;
  width: 100% !important;
}
.btn-dark {
  border-color: #a0a0a0;
}
.woocommerce .button {
  transition: all 0.2s ease-in;
}
.woocommerce .button:hover {
  background-color: #c31439 !important;
  transition: all 0.2s ease-in;
}
.resources .content .img-wrapper {
  height: 206px !important;
}
#cd-timeline {
  display: none;
}
@media (max-width: 1024px) {
  #cd-timeline {
    display: block;
  }
}
.icons {
  width: 18px;
  height: 18px;
  display: block;
  background-size: cover !important;
}
.icons.fb {
  background: url('../images/fb-g.png') no-repeat center center;
}
.icons.fb:hover {
  background: url('../images/fb-h.png') no-repeat center center;
}
.icons.tw {
  background: url('../images/tw-g.png') no-repeat center center;
}
.icons.tw:hover {
  background: url('../images/tw-h.png') no-repeat center center;
}
.icons.gp {
  background: url('../images/gp-g.png') no-repeat center center;
}
.icons.gp:hover {
  background: url('../images/gp-h.png') no-repeat center center;
}
.icons.pi {
  background: url('../images/pi-g.png') no-repeat center center;
}
.icons.pi:hover {
  background: url('../images/pi-h.png') no-repeat center center;
}
.social-block h4 .icons {
  width: 20px;
  height: 21px;
  display: block;
  background-size: cover !important;
}
.social-block h4 .icons.fb {
  background: url('../images/fb-w.png') no-repeat center center;
}
.social-block h4 .icons.fb:hover {
  background: url('../images/fb-h.png') no-repeat center center;
}
.social-block h4 .icons.tw {
  background: url('../images/tw-w.png') no-repeat center center;
}
.social-block h4 .icons.tw:hover {
  background: url('../images/tw-h.png') no-repeat center center;
}
.social-block h4 .icons.gp {
  background: url('../images/gp-w.png') no-repeat center center;
}
.social-block h4 .icons.gp:hover {
  background: url('../images/gp-h.png') no-repeat center center;
}
.social-block h4 .icons.pi {
  background: url('../images/pi-w.png') no-repeat center center;
}
.social-block h4 .icons.pi:hover {
  background: url('../images/pi-h.png') no-repeat center center;
}
.news .content p {
  height: 35px;
  overflow: hidden;
}
