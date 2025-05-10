from django.shortcuts import render
# views.py
from django.shortcuts import render, redirect
from customapp.models import CustomerRegistration
from django.http import HttpResponse

def register_customer(request):
    if request.method == 'POST':
        # Collecting form data
        data = {
            'company_name': request.POST.get('company_name'),
            'registered_address': request.POST.get('registered_address'),
            'pin_code': request.POST.get('pin_code'),
            'landline_no': request.POST.get('landline_no'),
            'telefax_no': request.POST.get('telefax_no'),
            'finance_head_name': request.POST.get('finance_head_name'),
            'finance_head_email': request.POST.get('finance_head_email'),
            'finance_head_mobile': request.POST.get('finance_head_mobile'),
            'billing_address1': request.POST.get('billing_address1'),
            'shipping_address1': request.POST.get('shipping_address1'),
            'billing_contact_name': request.POST.get('billing_contact_name'),
            'shipping_contact_name': request.POST.get('shipping_contact_name'),
            'billing_contact_mobile': request.POST.get('billing_contact_mobile'),
            'shipping_contact_mobile': request.POST.get('shipping_contact_mobile'),
            'billing_contact_email': request.POST.get('billing_contact_email'),
            'shipping_contact_email': request.POST.get('shipping_contact_email'),
            'pan_card_no': request.POST.get('pan_card_no'),
            'gst_no': request.POST.get('gst_no'),
            'msme_no': request.POST.get('msme_no'),
            'cin_no': request.POST.get('cin_no'),
            'company_type': request.POST.getlist('company_type'),
            'business_nature': request.POST.getlist('business_nature'),
            'office_space': request.POST.get('office_space'),
            'office_space_area': request.POST.get('office_space_area'),
            'business_start_year': request.POST.get('business_start_year'),
            'net_worth': request.POST.get('net_worth'),
            'equity_capital': request.POST.get('equity_capital'),
            'turnover_2023': request.POST.get('turnover_2023'),
            'turnover_2022': request.POST.get('turnover_2022'),
            'turnover_2021': request.POST.get('turnover_2021'),
            'no_of_employees': request.POST.get('no_of_employees'),
            'no_of_branches': request.POST.get('no_of_branches'),
            'director_name1': request.POST.get('director_name1'),
            'director_name2': request.POST.get('director_name2'),
            'director_address1': request.POST.get('director_address1'),
            'director_email1': request.POST.get('director_email1'),
            'director_mobile1': request.POST.get('director_mobile1'),
            'bank_name': request.POST.get('bank_name'),
            'bank_address1': request.POST.get('bank_address1'),
            'bank_branch_name': request.POST.get('bank_branch_name'),
            'bank_signatories': request.POST.get('bank_signatories'),
            'bank_account_no': request.POST.get('bank_account_no'),
            'bank_ifsc_code': request.POST.get('bank_ifsc_code'),
            'account_type': request.POST.getlist('account_type'),
            'bank_limit': request.POST.get('bank_limit'),
            'cash_credit_limit': request.POST.get('cash_credit_limit'),
            'overdraft_limit': request.POST.get('overdraft_limit'),
            'other_limit': request.POST.get('other_limit'),
            'ref_name1': request.POST.get('ref_name1'),
            'ref_address1_1': request.POST.get('ref_address1_1'),
            'ref_telephone1': request.POST.get('ref_telephone1'),
            'ref_contact_person1': request.POST.get('ref_contact_person1'),
            'ref_mobile1': request.POST.get('ref_mobile1'),
            'ref_email1': request.POST.get('ref_email1'),
            'ref_credit_period1': request.POST.get('ref_credit_period1'),
            'ref_credit_limit1': request.POST.get('ref_credit_limit1'),
            'signed_by': request.POST.get('signed_by'),
            'designation': request.POST.get('designation'),
            'office_ref_person': request.POST.get('office_ref_person'),
            'office_branch': request.POST.get('office_branch'),
            'office_credit_amount': request.POST.get('office_credit_amount'),
            'office_credit_days': request.POST.get('office_credit_days'),
            'office_product': request.POST.get('office_product'),
            'office_date': request.POST.get('office_date'),
            'office_authorise_by': request.POST.get('office_authorise_by'),
            'office_approved_amount': request.POST.get('office_approved_amount'),
            'remark': request.POST.get('office_remark'),
        }

        # Create and save the customer registration
        customer = CustomerRegistration(**data)
        customer.save()
        return HttpResponse("Customer registered successfully!")

    return render(request, 'customTemp/form.html')



# Create your views here.
