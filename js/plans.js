jQuery(document).ready(function() {
	jQuery.ajax({
	    url: 'http://api.outgrow.us/api/v1/plans',
	    success: function(success){
	        var plansList = '';
	        var featureList = '';
	        var fe = '';
	        var pricetag = '';
	        var price = 0;
	        var ulUsers = '',ulCalc = '',ulTemp = '';
	        for(var i = 0; i<success.data.lists.list.length;i++){
	        	pricetag = '';                	
	        	var box = '',mostPopular = '',bil_grey_white = '',bil_top = '',bil_bottom = '', dots = '', period = '', boxShadow = '',planId = '';
	            if(success.data.lists.list[i].plan.id != 'starter'){
	            	planId = success.data.lists.list[i].plan.id;

	            	if(success.data.lists.list[i].plan.id.split('_')[1] === 'm'){
	            		featureList = '';
	            		for(var j = 0; j < success.data.plans.length;j++){
							if(success.data.plans[j].plan._id == success.data.lists.list[i].plan.id.split('_')[0]){
								if(success.data.plans[j].plan.calculators == -1)
									ulCalc = 'Unlimited';
								else
									ulCalc = success.data.plans[j].plan.calculators;
								
								if(success.data.plans[j].plan.templates == -1)
									ulTemp = 'Unlimited';
								else
									ulTemp = success.data.plans[j].plan.templates;
								
								if(success.data.plans[j].plan.users == -1)
									ulUsers = 'Unlimited';
								else
									ulUsers = success.data.plans[j].plan.users;
						     	featureList = `
									<li>
										<a href="javascript:void(0);" class="">
											<span class="mat-icon"></span>
											<span class="list-name">&nbsp;
											`+ulUsers+` Users
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="">
											<span class="mat-icon"></span>
											<span class="list-name">&nbsp;
											`+ulCalc+` Calculators
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="">
											<span class="mat-icon"></span>
											<span class="list-name">&nbsp;
											`+ulTemp+` Templates
											</span>
										</a>
									</li>`;
							}
							for(var k = 0;k<success.data.plans[j].features.length; k++){
								if(success.data.plans[j].features[k].plan != 'starter' && success.data.plans[j].features[k].plan == success.data.lists.list[i].plan.id.split('_')[0]){
									featureList += `
										<li>
											<a href="javascript:void(0);" class="">
												<span class="mat-icon"></span>
												<span class="list-name">&nbsp;
												`+success.data.plans[j].features[k].feature.name+`
												</span>
											</a>
										</li>`;
								}
							}
							for(var l = 0;l<success.data.plans[j].cycles.length; l++){
								if(success.data.plans[j].cycles[l].plan != 'starter' && success.data.plans[j].cycles[l].name == 'm')
									if(success.data.plans[j].cycles[l].plan == success.data.lists.list[i].plan.id.split('_')[0]){
										if(success.data.plans[j].cycles[l].coupon_active){
											if(success.data.plans[j].cycles[l].coupon_type =='PERCENTAGE'){
												price = success.data.lists.list[i].plan.price/100 - (success.data.lists.list[i].plan.price/100)*success.data.plans[j].cycles[l].coupon_value/100;
											}
											else if(success.data.plans[j].cycles[l].coupon_type =='FLAT'){
												price = success.data.lists.list[i].plan.price/100 - success.data.plans[j].cycles[l].coupon_value;
											}
											pricetag = `
													<h3 class="plan-price">USD <span class="strike-off">`
													+success.data.lists.list[i].plan.price/100 +
													`</span> `+price+` / `+period+` `+success.data.lists.list[i].plan.period_unit+`</h3>`;
										}
										else{
											pricetag = `
													<h3 class="plan-price">USD `
													+success.data.lists.list[i].plan.price/100 +
													` / `
													+period+` `+success.data.lists.list[i].plan.period_unit+
													`</h3>`;
										}
									}
							}
						}
	                	if(success.data.lists.list[i].plan.id.split('_')[0] == 'business'){
	                        mostPopular = '<span class="ribbon">Most Popular</span>';
	                        bil_grey_white = 'billing-white';
	                        bil_top = 'billing-white-top';
	                        box = 'business-box';
	                        dots = 'toggle-dots-grey';
	                        boxShadow = 'business-box-xshadow';
	                        bil_bottom = 'billing-white-bottom'
	                    }
	                    else if(success.data.lists.list[i].plan.id.split('_')[0] == 'enterprise'){
	                        mostPopular = '';
	                        bil_grey_white = 'billing-grey';
	                        bil_top = 'billing-grey-top';
	                        box = 'enterprise-box';
	                        dots = 'toggle-dots-white';
	                        bil_bottom = 'billing-grey-bottom'
	                    }
	                    else{
	                        mostPopular = '';
	                        bil_grey_white = 'billing-grey';
	                        bil_top = 'billing-grey-top';
	                        box = 'starter-box';
	                        dots = 'toggle-dots-white';
	                        bil_bottom = 'billing-grey-bottom'
	                    }
	                    if(success.data.lists.list[i].plan.period > 1)
	                        period = success.data.lists.list[i].plan.period;
	                    plansList += `
	                    	<div class="col-md-4 col-sm-4 col-xs-12 np `+box+` `+bil_grey_white+`">
								<div class="col-md-12 col-sm-12 col-xs-12 np text-center `+bil_top+` `+boxShadow+`">
									`+mostPopular+`
									<h3 class="plan-title">`+success.data.lists.list[i].plan.name+`</h3>
									<span class="border-center"></span>
									`+pricetag+`
									<p>`+success.data.lists.list[i].plan.description+`</p>
									<div class="col-md-12 col-sm-12 col-xs-12 np">
										<a href="http://app.outgrow.us/signup" target="_blank" class="btn btn-white-red-outline hvr-sweep-to-right">SignUp</a>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 np rs-hide `+bil_bottom+`" id="`+planId+`">
									<ul class="billing-list">
										`+featureList+`
									</ul>
								</div>
								<a href="javascript:void(0);" class="`+dots+`" onclick="show('`+planId+`')">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>`;
					}
				}
	        }
	        jQuery('#plansList').html(plansList);
	    },
	    error:function(err){
	        console.log('err',err)
	    }
	});
});