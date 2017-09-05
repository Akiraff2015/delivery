/*
	Created by: Akira F. Fukushima
	Github: akiraff2015
	Date: 6 Sept 2017
	File: ./public/js/script.js
*/
$(function() {	
	// Object containg display forms, will be fetched via jQuery
	var formDisplay = {
		login: '#form_login',
		
		register: '#form_register',
		
		loginDisplayOn: function () {
			$(this.login).css({
				display: 'inline'
			});
		},
		
		loginDisplayOff: function() {
			$(this.login).css({
				display: 'none'
			});
		},

		registerDisplayOn: function() {
			$(this.register).css({
				display: 'inline'
			});
		},
		
		registerDisplayOff: function() {
			$(this.register).css({
				display: 'none'
			});
		}
	}
	
	// Register Form will be hidden by default
	formDisplay.registerDisplayOff();
	
	// Login Form click event handler
	$('#form_login > div#form_login-btn').on('click', function() {
		formDisplay.loginDisplayOff();
		formDisplay.registerDisplayOn();
	});
	
	// Register Form click event handler
	$('#form_register > div#form_register-btn').on('click', function() {
		formDisplay.registerDisplayOff();
		formDisplay.loginDisplayOn();
	});
});
