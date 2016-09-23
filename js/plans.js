var pCycle = 'm', allPlans;
jQuery(document).ready(function() {
	getAllPlans();
	var planCycle = `
		<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3 np billing-plan-list" id="plans">
			<ul>
				<li class="cycle-tab active" id="monthly">
					<a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan('m');">
						Monthly
					</a>
				</li>
				<li class="cycle-tab" id="half-yearly">
					<a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan('s')">
						Half Yearly
					</a>
				</li>
				<li class="cycle-tab" id="annually">
					<a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan('y')">
						Annually
					</a>
				</li>
			</ul>
		</div>
		`;
	var freePlan = `<i class="material-icons">not_interested</i>
				<h4>Casual User?</h4>
				<p>Are you a student or a freelancer who wants to explore interactive calculars? We have a limited plan for you to play around with. Sign up <a href="http://app.outgrow.us/signup" target="_blank">here</a>.</p>`;
	jQuery('#plan-cycle').html(planCycle);
	jQuery('#freePlan').html(freePlan);
});

var getAllPlans = function () {
	var plansList = '<img src="./images/logoAnim.gif" alt="loading..." />';
	jQuery('#plansList').html(plansList);
	jQuery.ajax({
		url: 'http://api.outgrow.us/api/v1/plans',
		success: function(success){
			allPlans = success;
			displayPlans();
		},
		error:function(err){
			console.log('err',err)
		}
	});
}

var displayPlans = function(){
	var plansList = '';
	var featureList = '';
	var fe = '';
	var pricetag = '';
	var price = 0;
	var ulUsers = '',ulCalc = '',ulTemp = '', cta = '';
	for(var i = 0; i<allPlans.data.lists.list.length;i++){
		pricetag = '';
		var box = '',mostPopular = '',bil_grey_white = '',bil_top = '',bil_bottom = '', dots = '', period = '', boxShadow = '',planId = '';
		if(allPlans.data.lists.list[i].plan.id != 'starter'){
			planId = allPlans.data.lists.list[i].plan.id;

			if(allPlans.data.lists.list[i].plan.id.split('_')[1] === pCycle){
				featureList = '';
				for(var j = 0; j < allPlans.data.plans.length;j++){
					if(allPlans.data.plans[j].plan._id == allPlans.data.lists.list[i].plan.id.split('_')[0]){
						if(allPlans.data.plans[j].plan.calculators == -1)
							ulCalc = 'Unlimited';
						else
							ulCalc = allPlans.data.plans[j].plan.calculators;

						if(allPlans.data.plans[j].plan.templates == -1)
							ulTemp = 'Unlimited';
						else
							ulTemp = allPlans.data.plans[j].plan.templates;

						if(allPlans.data.plans[j].plan.users == -1)
							ulUsers = 'Unlimited';
						else
							ulUsers = allPlans.data.plans[j].plan.users;
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
					for(var k = 0;k<allPlans.data.plans[j].features.length; k++){
						if(allPlans.data.plans[j].features[k].plan != 'starter' && allPlans.data.plans[j].features[k].plan == allPlans.data.lists.list[i].plan.id.split('_')[0]){
							if(allPlans.data.plans[j].features[k].active){
								featureList += `
									<li>
										<a href="javascript:void(0);" class="">
											<span class="mat-icon"></span>
											<span class="list-name">&nbsp;
											`+allPlans.data.plans[j].features[k].feature.name+`
											</span>
										</a>
									</li>`;
							}
							else if(!allPlans.data.plans[j].features[k].active){
								featureList += `
								<li class="unselected">
									<a href="javascript:void(0);" class="">
										<span class="mat-icon"></span>
										<span class="list-name">&nbsp;
										`+allPlans.data.plans[j].features[k].feature.name+`
										</span>
									</a>
								</li>`;
							}
						}
					}
					for(var l = 0;l<allPlans.data.plans[j].cycles.length; l++){
						if(allPlans.data.plans[j].cycles[l].plan != 'starter' && allPlans.data.plans[j].cycles[l].name == pCycle)
							if(allPlans.data.plans[j].cycles[l].plan == allPlans.data.lists.list[i].plan.id.split('_')[0]){
								if(allPlans.data.plans[j].cycles[l].coupon_active){
									if(allPlans.data.plans[j].cycles[l].coupon_type =='PERCENTAGE'){
										price = allPlans.data.lists.list[i].plan.price/100 - (allPlans.data.lists.list[i].plan.price/100)*allPlans.data.plans[j].cycles[l].coupon_value/100;
									}
									else if(allPlans.data.plans[j].cycles[l].coupon_type =='FLAT'){
										price = allPlans.data.lists.list[i].plan.price/100 - allPlans.data.plans[j].cycles[l].coupon_value;
									}
									if(allPlans.data.lists.list[i].plan.period == 6 && allPlans.data.lists.list[i].plan.period_unit == 'month'){
										pricetag = `
											<h3 class="plan-price">USD <span class="strike-off">`
											+allPlans.data.lists.list[i].plan.price/100 +
											`</span> `+price+` Half Yearly</h3>
											<span class="apply-coupon">Use Coupon code : `+allPlans.data.plans[j].cycles[l].coupon_name+`</span>`;
									}
									else if(allPlans.data.lists.list[i].plan.period == 1){
										pricetag = `
											<h3 class="plan-price">USD <span class="strike-off">`
											+allPlans.data.lists.list[i].plan.price/100 +
											`</span> `+price+` `+allPlans.data.lists.list[i].plan.period_unit+`ly</h3>
											<span class="apply-coupon">Use Coupon code : `+allPlans.data.plans[j].cycles[l].coupon_name+`</span>`;
									}
								}
								else{
									if(allPlans.data.lists.list[i].plan.period == 6 && allPlans.data.lists.list[i].plan.period_unit == 'month'){
										pricetag = `
											<h3 class="plan-price">USD `
											+allPlans.data.lists.list[i].plan.price/100 +
											` Half Yearly</h3>`;
									}
									else if(allPlans.data.lists.list[i].plan.period == 1){
										pricetag = `
											<h3 class="plan-price">USD `
											+allPlans.data.lists.list[i].plan.price/100 +
											` `+allPlans.data.lists.list[i].plan.period_unit+
											`ly</h3>`;
									}
								}
								if(allPlans.data.lists.list[i].plan.id.split('_')[0] === 'enterprise')
									pricetag = '';
							}
					}
				}
				cta = `<div class="col-md-12 col-sm-12 col-xs-12 np">
								<a href="http://app.outgrow.us/signup" target="_blank" class="btn btn-white-red-outline hvr-sweep-to-right">Signup</a>
							</div>`;
				if(allPlans.data.lists.list[i].plan.id.split('_')[0] == 'business'){
					mostPopular = '<span class="ribbon">Most Popular</span>';
					bil_grey_white = 'billing-white';
					bil_top = 'billing-white-top';
					box = 'business-box';
					dots = 'toggle-dots-grey';
					boxShadow = 'business-box-xshadow';
					bil_bottom = 'billing-white-bottom'
				}
				else if(allPlans.data.lists.list[i].plan.id.split('_')[0] == 'enterprise'){
					mostPopular = '';
					bil_grey_white = 'billing-grey';
					bil_top = 'billing-grey-top';
					box = 'enterprise-box';
					dots = 'toggle-dots-white';
					bil_bottom = 'billing-grey-bottom'
					cta = `<div class="col-md-12 col-sm-12 col-xs-12 np">
								<a href="mailto:randy@outgrow.co" class="btn btn-white-red-outline hvr-sweep-to-right">Contact Us</a>
							</div>`;
				}
				else{
					mostPopular = '';
					bil_grey_white = 'billing-grey';
					bil_top = 'billing-grey-top';
					box = 'starter-box';
					dots = 'toggle-dots-white';
					bil_bottom = 'billing-grey-bottom'
				}
				plansList += `
					<div class="col-md-4 col-sm-4 col-xs-12 np `+box+` `+bil_grey_white+`">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center `+bil_top+` `+boxShadow+`">
							`+mostPopular+`
							<h3 class="plan-title">`+allPlans.data.lists.list[i].plan.name+`</h3>
							<span class="border-center"></span>
							`+pricetag+`
							<p>`+allPlans.data.lists.list[i].plan.description+`</p>
							`+cta+`
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
}
var showPlan = function(plan) {
	pCycle = plan;
	jQuery('.cycle-tab').removeClass('active');
	if(plan == 'm')
		jQuery('#monthly').addClass('active');
	else if(plan == 's')
		jQuery('#half-yearly').addClass('active');
	else if(plan == 's')
		jQuery('#annually').addClass('active');
	displayPlans();
}

var show = function(id) {
	if(jQuery('#'+id).hasClass('rs-hide'))
		jQuery('#'+id).removeClass('rs-hide');
	else
		jQuery('#'+id).addClass('rs-hide');
}