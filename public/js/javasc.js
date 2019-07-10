var kk=0,kd=0, contm='#contentm',contk='#contentk';
$(function () {
	fnck('khom',acon,'get',1,1);
	fnck('kpro',acon,'get',1,1);
	carg();
	// alertify.success("Bienvenido al Sistema ");
	searcha();
	$('.dropdown-toggle').dropdown();
	alink('regexpside');
	alink('eladesside');
	alink('recdocside');
	alink('archvside');
});
function carg() {
	mk=$('div[class*="kenmk"]');
	for (var i = 0; i < mk.length; i++) {
		fnck(mk[i].classList[mk[i].classList.length-1],acon,'get',1,0);
	}
}
function refr () {$(contk).remove(); $(contm).empty(); $(contm).append('<div id="contentk"></div>'); } function refrtd () {$(contk).remove(); $(contm).empty(); $(contm).append('<div id="contentk"></div>'); }
function acon (datos,pnl) {
	$(contk).empty();
	$(contk).append(datos);
	if (pnl) {carg()}
}
function amod(datos,pnl) {
	$('#modal-content').empty();
	$('#modal-content').append(datos);
	$('#modalDefault').modal('show');
}
function alink(link) {
	$('.'+link).on('click', function(event) {
		event.preventDefault();
		$.ajax({
			url: $(this).attr('href'),
			type: 'get',
			dataType: 'json',
		}).done(function(response) {
			if (response.view!=undefined) {
				acon(response.view,0);
			}
		}).fail(function(e) {
			wrongk(e);
		});
	});
}
function mcan() {
	$('.mcan').on('click', function(event) {
		event.preventDefault();
		$('#modalDefault').modal('hide');
	});
}
function fnck(clase,func,typegp,refresh,pnl) {
	$('.'+clase).on('click', function(event) {
		event.preventDefault();
		$.ajax({url: $(this).attr('href'), type: typegp, dataType: 'json',
			async: true,
		}).done(function(response) {
			kk=response;
			if (response.view!=undefined) {
				if (refresh) refr();
				func(response.view,pnl);
			} else {
				goodk(response);
			}
		}).fail(function(e) {
			wrongk(e);
		});
	});
}
function msfun(e) {
	if (e.status==403) {
		swal({
		  title: e.responseJSON.sms,
		  text: "...",
		  timer: 2000,
		  showConfirmButton: false
		});
		alertify.error('<b>'+e.responseJSON.sms+'</b>');
	} else {
		alertify.error('<b>Problemas con el proceso de la información</b>');
	}
}
function fnckgp(tipo,idclass,url) {
	$(idclass).on("click", function(event){
		event.preventDefault();
		$.tipo(url,function(response){
			$(idclass).html(response.view);
		});
	});
}
function formksubmit(formk) {
	$('.'+formk).on('submit', function(event) {
		event.preventDefault();
		valida = valData('.'+formk);
		if (valida[0]) {
			$.ajax({
				url: $(this).attr('action'),
				type: $(this).attr('method'),
				dataType: 'json',
				data:$(this).serialize(),
			}).done(function(response) {
				// kk=response;
				if (response.view!=undefined) {
					$('#collapseOne').hide('slow', function() { });
					$('.'+formk).each(function(index) {this.reset(); });
					$('#modalDefault').modal('hide');
				}
				if (response.home==true) {
					window.location=window.location.origin+"/home";
				} else {
					goodk(response);
				}
			}).fail(function(e) {
				wrongk(e);
			});
		} else {
			alertify.error(valida[1]);
			$('#'+valida[2]).focus();
		}
	});
}
function wrongk(e) {
	if (e.status==401) {
		alertify.error("Tiene que autentificarse"); window.location=window.location.origin+"/login";
	} else {
		alertify.error("Hubo un problema...");
	}
}
function goodk(response) {
	if (response.view!=undefined) {
		$('#tabla-content').empty();
		$('#tabla-content').append(response.view);
	}
	if(response.swalm!=undefined){swal(response.swalm,response.sms,response.tipo); }
	if(response.alertify!=undefined){alertify.success(response.alertify); }
}
function funok() {
	swal("¡Se guardo correctamente!", "Presionar en el botón", "success");
}
function collapsek(clase,reset) {
	$('.'+clase).on('click', function(event) {
		event.preventDefault();
		$($(this).attr('href')).toggle('slow');
		if (reset) {$($(this).parent('form')).each(function() {this.reset(); }); }
	});
}
function deletemk(id) {
	$('.deletemk'+id).on('submit', function(event) {
		event.preventDefault();
		swal({
		 title: "¿Seguro que deseas eliminar el campo?",
		 text: "No podrás deshacer este proceso...",
		 type: "warning",
		 showCancelButton: true,
		 cancelButtonText: "Mmm... mejor no",
		 confirmButtonColor: "#DD6B55",
		 confirmButtonText: "¡Estoy seguro!",
		 closeOnConfirm: false
		},function(){
			$.ajax({
				url: $('.deletemk'+id).attr('action'),
				type: $('.deletemk'+id).attr('method'),
				dataType: 'json',
				data:$('.deletemk'+id).serialize(),
			}).done(function(response) {
				kk=response.swalm;
				goodk(response);
			}).fail(function(e) {
				wrongk(e);
			});
		});
	});
}
function editmk(id,name) {
	$('.'+name+id).on('click', function(event) {
		event.preventDefault();
		$.ajax({
			url: $('.'+name+id).attr('action'),
			type: $('.'+name+id).attr('method'),
			dataType: 'json',
			data:{id:id},
		}).done(function(response) {
			kk=response.swalm;
			if (response.view!=undefined) {
				amod(response.view,0);
			}
		}).fail(function(e) {
			wrongk(e);
		});
	});
}
function enviarmk(id,name) {
	$('.'+name+id).on('click', function(event) {
		event.preventDefault();
		$.ajax({
			url: $('.'+name+id).attr('action'),
			type: $('.'+name+id).attr('method'),
			dataType: 'json',
			data:{id:id},
		}).done(function(response) {
			kk=response.swalm;
			goodk(response);
			$('.enviarmk'+response.id).html('<i class="fa-check-square-o"> </i> Enviado');
			$('.enviarmk'+response.id).removeClass('btn-info');
			$('.enviarmk'+response.id).addClass('btn-success');
			$('.enviarmk'+response.id).on('click', function(event) {
				event.preventDefault();
			});
		}).fail(function(e) {
			wrongk(e);
		});
	});
}
function modaldesmk(id,name) {
	$('.'+name+id).on('click', function(event) {
		event.preventDefault();
		$.ajax({
			url: $('.'+name+id).attr('action'),
			type: $('.'+name+id).attr('method'),
			dataType: 'json',
			data:{id:id},
		}).done(function(response) {
			kk=response.swalm;
			if (response.view!=undefined) {
				$('#modal-content2').empty();
				$('#modal-content2').append(response.view);
				$('#modalDefault2').modal('show');
			}
			$('.enviarmk'+response.id).html('<i class="fa-check-square-o"> </i> Enviado');
			$('.enviarmk'+response.id).removeClass('btn-info');
			$('.enviarmk'+response.id).addClass('btn-success');
			$('.enviarmk'+response.id).on('click', function(event) {
				event.preventDefault();
			});
		}).fail(function(e) {
			wrongk(e);
		});
	});
}
function recepmk(id,name) {
	$('.'+name+id).on('click', function(event) {
		event.preventDefault();
		$.ajax({
			url: $('.'+name+id).attr('action'),
			type: $('.'+name+id).attr('method'),
			dataType: 'json',
			data:{id:id},
		}).done(function(response) {
			kk=response.view;
			if (response.view!=undefined) {
				$('.trrecep'+id).remove();
			}
			// goodk(response);
			// $('#body2').html(response.view);
			// $('.recepmk'+response.id).html('<i class="fa-check-square-o"> </i> Recibido');
			// $('.recepmk'+response.id).removeClass('btn-info');
			// $('.recepmk'+response.id).addClass('btn-success');
			// $('.recepmk'+response.id).on('click', function(event) {
			// 	event.preventDefault();
			// });
		}).fail(function(e) {
			wrongk(e);
		});
	});
}
function archimk(id,name,value) {
	$('.'+name+id).on('click', function(event) {
		event.preventDefault();
		$.ajax({
			url: $('.'+name+id).attr('action'),
			type: $('.'+name+id).attr('method'),
			dataType: 'json',
			data:{id:id,value:value},
		}).done(function(response) {
			if (response.view!=undefined) {
				$('.trrecep'+id).remove();
			}
		}).fail(function(e) {
			wrongk(e);
		});
	});
}
function searcha() {
	$('.seavanz').on('click', function(event) {
		$.ajax({url: 'view/search/avanzada', type: 'get', dataType: 'json',
			async: true,
		}).done(function(response) {
			// kk=response;
			if (response.view!=undefined) {
				// if (refresh) refr();
				// func(response.view,pnl);
				$('#searchreg2').html(response.view);
			} else {
				goodk(response);
			}
		}).fail(function(e) {
			wrongk(e);
		});
	});
}
function soloNum() {
	$('.soloNum').keyup(function (){
		this.value = (this.value + '').replace(/[^0-9]/g, '');
	});
}
function soloLetras() {
	$('.soloLetras').keyup(function (){
		this.value = (this.value + '').replace(/[^a-z áéíóúüñ]+/ig, '');
	});
}
function numCaracter() {
	$(".numCaracter").keyup(function(){
		$caracteres = $(this).attr('len');
		$cant = $(this).val().length;
		if($cant > $caracteres){
			$(this).val($(this).val().substr(0, $caracteres));
		}
	});
}
function valData(form) {
	placeholder="";
	flat=true;
	id='';
	$(form).find(':input').each(function() {
		var elem= this;
		if (elem.type=="text" || elem.type=="textarea") {
			elem=$('#'+elem.id);
			if (elem.hasClass('required')) {
				if (elem.val()=="") {
					placeholder=elem.attr('placeholder');
					flat=false;
					id=this.id;
					return false;
				}
			}
		}
	});
	return [flat,placeholder,id];
}
