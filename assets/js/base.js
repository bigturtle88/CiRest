jQuery(document).ready(function () {
	var request = {};
	$("#restForm").hide();

	$("#formCity").attr('disabled', true);
	$("#formCity").html("<option value='false'>Select City</option>");
	$("#formLang").attr('disabled', true);
	$("#formLang").html("<option value='false'>Select Lang</option>");
	var client = new $.RestClient('/rest_server/');
	client.add('country');
	client.add('cityPull');
	client.add('langPull');
	client.add('city');
	client.add('lang');
	var request = client.country.read();
	request.done(function (data) {
		$.each(data, function (id, country) {
			$("#formCountry").append("<option name=\"" + country.name + "\" value=\"" + country.id + "\">" + country.name + "</option>");
		});
	});
	$('#formCountry').change(function () {
		var id = $('#formCountry').val();
		if ($('#formCountry').val() == false) {
			$("#formCity").attr('disabled', true);
			$("#formCity").html("<option value='false'>Select City</option>");
		}
		var request = client.cityPull.read('id/' + id);
		request.done(function (data) {
			$("#formCity").empty();
			$("#formCity").html("<option value='false'>Select City</option>");
			if (data.status === false) {
				$("#formCity").attr('disabled', true);
				$("#formCity").html("<option value='false'>Select City</option>");
			} else {
				$("#formCity").attr('disabled', false);
				$.each(data, function (id, city) {
					$("#formCity").append("<option name=\"" + city.name + "\" value=\"" + city.id + "\">" + city.name + "</option>");
				});
			}
		});
	});
	$('#formCountry').change(function () {
		var id = $('#formCountry').val()
		var request = client.langPull.read('id/' + id);
		request.done(function (data) {
			$("#formLang").empty();
			$("#formLang").html("<option value='false'>Select Lang</option>");
			if (data.status === false) {
				$("#infoContentTable").empty();
				$("#formLang").attr('disabled', true);
				$("#formLang").html("<option value='false'>Select Lang</option>");
			} else {
				$("#formLang").attr('disabled', false);
				$("#infoContentTable").empty();
				$.each(data, function (id, lang) {
					$("#formLang").append("<option name=\"" + lang.name + "\" value=\"" + lang.id + "\">" + lang.name + "</option>");
					$("#infoContentTable").append("<tr><th scope=\"row\">" + lang.id + "</th> <td>" + lang.name + "</td></tr>");
				});
			}
		});
	})

	$("#countryCreate").click(function () {


		$("#restForm").show();
		$("#restValue").val('');
		$("#restValueSubmit").html("Creat country");
		$("#restValueSubmit").attr("class", "btn btn-default countryCreatButton");


	})
	$(document).on('click', ".countryCreatButton", function () {


		var name = $("#restValue").val();
		client.country.create({name: name});
		location.reload();

	})

	$("#countryEdite").click(function () {


		$("#restForm").show();
		$("#restValue").val('');
		$("#restValueSubmit").html("Edite country");
		$("#restValueSubmit").attr("class", "btn btn-default countryEditeButton");
		$("#restValue").val($('#formCountry  option:selected').text());


	})
	$(document).on('click', ".countryEditeButton", function () {


		var name = $("#restValue").val();
		var id = $('#formCountry').val();
		client.country.update({id: id, name: name});
		location.reload();

	})


	$("#countryDelete").click(function () {


		$("#restForm").show();
		$("#restValue").val('');
		$("#restValueSubmit").attr("class", "btn btn-default countryDeleteButton");
		$("#restValueSubmit").html("Delete country");
		$("#restValue").val($('#formCountry  option:selected').text());


	})

	$(document).on('click', ".countryDeleteButton", function () {


		var id = $('#formCountry').val();
		client.country.destroy({id: id});
		location.reload();

	})

	$("#citiesCreate").click(function () {


		$("#restForm").show();
		$("#restValue").val('');
		$("#restValueSubmit").html("Creat city");
		$("#restValueSubmit").attr("class", "btn btn-default cityCreatButton");


	})

	$(document).on('click', ".cityCreatButton", function () {

		var idCountry = $('#formCountry').val();
		var name = $("#restValue").val();

		client.city.create({idCountry: idCountry, name: name});
		location.reload();

	})

	$("#citiesEdite").click(function () {


		$("#restForm").show();
		$("#restValue").val('');
		$("#restValueSubmit").html("Edite city");
		$("#restValueSubmit").attr("class", "btn btn-default cityEditeButton");
		$("#restValue").val($('#formCity option:selected').text());

	})

	$(document).on('click', ".cityEditeButton", function () {

		var id = $('#formCity').val();
		var name = $("#restValue").val();
		client.city.update({id: id, name: name});

		location.reload();

	})


	$("#citiesDelete").click(function () {


		$("#restForm").show();
		$("#restValue").val('');
		$("#restValueSubmit").attr("class", "btn btn-default cityDeleteButton");
		$("#restValueSubmit").html("Delete city");
		$("#restValue").val($('#formCity  option:selected').text());


	})

	$(document).on('click', ".cityDeleteButton", function () {


		var id = $('#formCity').val();
		client.city.destroy({id: id});
		location.reload();

	})


	//Lang

	$("#langCreate").click(function () {


		$("#restForm").show();
		$("#restValue").val('');
		$("#restValueSubmit").html("Creat Lang");
		$("#restValueSubmit").attr("class", "btn btn-default langCreatButton");


	})

	$(document).on('click', ".langCreatButton", function () {

		var idCountry = $('#formCountry').val();
		var name = $("#restValue").val();

		client.lang.create({idCountry: idCountry, name: name});
		location.reload();

	})

	$("#langEdite").click(function () {


		$("#restForm").show();
		$("#restValue").val('');
		$("#restValueSubmit").html("Edite lang");
		$("#restValueSubmit").attr("class", "btn btn-default langEditeButton");
		$("#restValue").val($('#formLang option:selected').text());

	})

	$(document).on('click', ".langEditeButton", function () {

		var id = $('#formLang').val();
		var name = $("#restValue").val();
		client.lang.update({id: id, name: name});

		location.reload();

	})


	$("#langDelete").click(function () {


		$("#restForm").show();
		$("#restValue").val('');
		$("#restValueSubmit").attr("class", "btn btn-default langDeleteButton");
		$("#restValueSubmit").html("Delete lang");
		$("#restValue").val($('#formLang  option:selected').text());


	})

	$(document).on('click', ".langDeleteButton", function () {


		var id = $('#formLang').val();
		client.lang.destroy({id: id});
		location.reload();

	})
});