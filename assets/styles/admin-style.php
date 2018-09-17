<?php
/**
 * Template Name: Custom Admin Menu
 */
?>

<style>
* {
	box-sizing: border-box;
}


h1.page-title {
    font-weight: 600;
	padding: 0 !important;
}

.main-container {
	margin: 20px auto auto;
	padding: 0;
}

.container-div {
	padding: 10px;
	margin: 0 auto 15px;
	background-color: #fff;
}

.inner-container-div {
	width: 100%;
	margin: auto;
}

h1.container-heading, h2.container-heading, h3.container-heading {
    color: #037396;
    font-weight: 600;
	padding: 0 !important;
	margin: 0 !important;
}
h3.container-heading {
	font-size: 18px !important;
}
hr.container-heading-divider {
	margin: 10px auto !important;
}

.full-width {
	width: 100% !important;
}

.half-width {
	width: 50% !important;
}

p.no-margin {
	margin: 0 !important;
}

.no-margin {
	margin: 0 !important;
}

.margin-5 {
	margin: 5px;
}

.margin-10 {
	margin: 10px;
}

.margin-20 {
	margin: 20px;
}

.no-top-margin, .no-margin-top {
	margin-top: 0 !important;
}

.no-bottom-margin, .no-margin-bottom {
	margin-bottom: 0 !important;
}

.no-rl-margin, .no-margin-rl {
	margin-left: 0 !important;
	margin-right: 0 !important;
}

.text-left {
	text-align: left !important;
}
.text-right {
	text-align: right !important;
}
.text-center {
	text-align: center !important;
}
.bold {
	font-weight: 600;
}


.row {
	width: 100%;
}

.col {
	display: inline-block;
}

.col-left {
	float: left;
}

.col-right {
	float: right;
}

.clearfix {
	clear: both;
}

.label-text {
	margin: 10px 0 7px;
	font-weight: 600;
}

.red-star {
	color: red;
	font-weight: 900;
}

span.tips:after {
    content: "\003F";
    font-size: 12px;
    font-weight: 900;
    line-height: 14px;
    /* border: 2px solid #2b2b2b; */
    border-radius: 50px;
    color: #ffffff;
    background: #3a3a3a;
    padding: 0 6px;
}

.button-primary {
    background: #0085ba;
    border-color: #0073aa #006799 #006799;
    -webkit-box-shadow: 0 1px 0 #006799;
    box-shadow: 0 1px 0 #006799;
    color: #fff !important;
	margin: auto !important;
    text-decoration: none;
    text-shadow: 0 -1px 1px #006799, 1px 0 1px #006799, 0 1px 1px #006799, -1px 0 1px #006799;
}

.container-action-btn {
	width: 80px;
	text-align: center;
}

.form-container-div {
	width: 100%;
	max-width: 600px;
	margin: auto;
}

.submit-result-div {
	padding: 15px 0;
}

.status-count {
    color: #124964;
    font-weight: 600;
}

.list-paginate {
	float: right;
}

.list-paginate .page-numbers {
    padding: 2px 15px;
    background-color: #dedede;
    border: 1px solid #c1c1c1;
    text-decoration: none;
}

span.page-numbers.current {
    background-color: transparent !important;
    border-color: #dedede !important;
}

button.pointer, .pointer {
	cursor: pointer;
}

.xl-btn-div {
	width: 100px;
	padding: 15px 0;
}

#xl-btn {
	color: #fff;
    font-weight: 600;
    width: 100%;
    border: 0;
    padding: 7px 10px;
    cursor: pointer;
    background-color: #4472c4;
}

.btn-blue {
    border: 1px solid #2779bb;
    color: #FFFFFF;
    background: #2196f3; /* For browsers that do not support gradients */
	background: linear-gradient(#2196f3, #317db9, #2196f3);
	background: -webkit-linear-gradient(#2196f3, #317db9, #2196f3); /* For Safari 5.1 to 6.0 */
	background: -o-linear-gradient(#2196f3, #317db9, #2196f3); /* For Opera 11.1 to 12.0 */
	background: -moz-linear-gradient(#2196f3, #317db9, #2196f3); /* For Firefox 3.6 to 15 */
    box-shadow: 1px 1px 1px #7b7b7b;
}

.btn-yellow {

    border: 1px solid #da964d;
    color: #FFFFFF;
	background: #f8ac59; /* For browsers that do not support gradients */
	background: linear-gradient(#f8ac59, #dc984e, #f8ac59);
	background: -webkit-linear-gradient(#f8ac59, #dc984e, #f8ac59); /* For Safari 5.1 to 6.0 */
	background: -o-linear-gradient(#f8ac59, #dc984e, #f8ac59); /* For Opera 11.1 to 12.0 */
	background: -moz-linear-gradient(#f8ac59, #dc984e, #f8ac59); /* For Firefox 3.6 to 15 */
    box-shadow: 1px 1px 1px #7b7b7b;
}

.btn-red {
    border: 1px solid #ca7e86;
    color: #FFFFFF;
	background: #ed5565; /* For browsers that do not support gradients */
	background: linear-gradient(#ed5565, #ca4654, #ed5565);
	background: -webkit-linear-gradient(#ed5565, #ca4654, #ed5565); /* For Safari 5.1 to 6.0 */
	background: -o-linear-gradient(#ed5565, #ca4654, #ed5565); /* For Opera 11.1 to 12.0 */
	background: -moz-linear-gradient(#ed5565, #ca4654, #ed5565); /* For Firefox 3.6 to 15 */
    box-shadow: 1px 1px 1px #7b7b7b;
}

#xl-btn:hover {
    background-color: #345da7
}

p.field-label {
	font-weight: 600;
	color: #fff;
	padding-left: 5px;
}

/**************** xl-table ************************/
.xl-table {
	border-collapse: collapse;
	table-layout: fixed !important;
}
table.xl-table tr#tr-header th {
	padding: 5px 2px !important;
	border: 1px solid #cecccc;
}
table.xl-table tr:nth-child(even) {
	background-color: #fbfbfb;
}

table.xl-table tr:nth-child(odd) {
	background-color: #f3f3f3;
}

.xl-table tr#tr-header {
	background-color: #eaeaea !important;
}
.xl-table td {
	border: 1px solid #eaeaea;
}

.cell-border {
	border: 1px solid #ccc;
}


/****************** Nav Tabs **************************/
.tabs-container {
	width: 100%;
	margin: 10px auto 20px;
}
.nav-tabs {
	padding-right: 2px;
}
.empty-nav {
	border-bottom: 1px solid #ccc;
}
.nav-tabs a:link {
	text-decoration: none !important;
}
.active-nav, .inactive-nav, .empty-nav {
	padding: 5px 8px;
}
.active-nav, .inactive-nav {
	border-radius: 5px 5px 0 0;
	text-align: center !important;
	border-left: 1px solid #ccc;
	border-top: 1px solid #ccc;
	border-right: 1px solid #ccc;
}
.active-nav {
	background-color: #fff;
}
.inactive-nav {
	background-color: #ccc;
}

.nav-tab-heading {
	margin: 0 auto !important;
}


/**************** data-list-table ************************/
/**************** data-list-table ************************/

table.data-list-table th {
    border: 1px solid #cecccc;
}
table.data-list-table td {
    border: 1px solid #e4e4e4;
	text-align: center;
}

table.data-list-table tr#tr-header {
	background-color: #e2e2e2 !important;
}
table.data-list-table tr#tr-header th {
	padding: 5px 2px !important;
}

table.data-list-table tr:nth-child(even) {
	background-color: #fff;
}

table.data-list-table tr:nth-child(odd) {
	background-color: #f7f7f7;
}


.table-collapse {
	border-collapse: collapse;
	margin:auto;
}
.table-fixed {
	table-layout: fixed !important;
}

.td-no-border td {
	border: none !important;
}



.success-msg {
	color: #125213;
	text-align: center;
	font-weight: 600;
    background-color: #dff0d8;
    border-color: #d6e9c6;
	padding: 8px;
}

.error-msg {
	color: #a94442 !important;
	text-align: center;
	font-weight: 600;
    background-color: #f2dede;
    border-color: #ebccd1;
	padding: 8px;
}

.warning-msg {
	color: #8a6d3b !important;
	text-align: center;
	font-weight: 600;
    background-color: #fcf8e3;
    border-color: #faebcc;
	padding: 8px;
}


/****************************************************** Forms ************************************************************/
::placeholder {
	color: #ccc !important;
}

/******************************************************* POPUPS **********************************************************/
.xl-popup-container {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.6);
	z-index: 99998;
	
}
.xl-popup-inner {
	position: relative;
	top: 10%;
	width: 80%;
	height: auto;
	max-width: 650px;
	margin: auto;
	padding: 15px;
	background-color: #fff;
	border-radius: 10px;
}
.xl-pop-close {
	position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    margin-top: -15px;
    margin-right: -15px;
    background-color: rgba(56, 56, 56, 0.8);
    border: 2px solid rgba(150, 150, 150, 0.8);
    border-radius: 50px;
	cursor: pointer;
}
h1.pop-close-x {
	color: #fff !important;
    padding: 4px;
    margin: 0 !important;
    text-align: center;
}

</style>