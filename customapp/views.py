from django.shortcuts import render
from django.conf import settings
import os, uuid

from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse
from django.template.loader import render_to_string
from weasyprint import HTML
import io
import zipfile
from django.conf import settings
import os

# views.py
from django.shortcuts import render, redirect
from customapp.models import CustomerRegistration
from django.http import HttpResponse
from django.core.files.storage import FileSystemStorage
import os
from django.contrib.auth import authenticate, login
from django.shortcuts import render, get_object_or_404


def dashboard(request):
    customers = CustomerRegistration.objects.all()
    return render(request, 'customTemp/dashboard.html', {'customers': customers})

def save_file(file_field_name, upload_subdirectory, request):
    file = request.FILES.get(file_field_name)
    if file:
        fs = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, upload_subdirectory))
        filename = fs.save(file.name, file)
        return os.path.join(upload_subdirectory, filename)
    return None



def register_customer(request):
    if request.method == 'POST':
        
        
        
        fs_customer_registration = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, 'customer_registration'))
        fs_gst_certificate = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, 'gst_certificates'))
        fs_pan_card = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, 'pan_cards'))
        fs_balance_sheet = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, 'balance_sheets'))
        fs_company_certificate = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, 'company_certificates'))
        fs_bank_statement = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, 'bank_statements'))
        fs_audited_financials = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, 'audited_financials'))
        fs_kyc_document = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, 'kyc_documents'))
        fs_security_cheques = FileSystemStorage(location=os.path.join(settings.MEDIA_ROOT, 'security_cheques'))

    # Collect form data 
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
        try:
            customer_registration_path = save_file('doc_customer_registration', 'customer_registration', request)
            gst_certificate_path = save_file('doc_gst_certificate', 'gst_certificates', request)
            pan_card_path = save_file('doc_pan_card', 'pan_cards', request)
            balance_sheet_partnership_path = save_file('doc_balance_sheet_partnership', 'balance_sheets', request)
            company_certificate_path = save_file('doc_company_certificate', 'company_certificates', request)
            bank_statement_path = save_file('doc_bank_statement', 'bank_statements', request)
            audited_financials_path = save_file('doc_audited_financials', 'audited_financials', request)
            kyc_document_path = save_file('doc_kyc_document', 'kyc_documents', request)
            security_cheques_path = save_file('doc_security_cheques', 'security_cheques', request)

            customer = CustomerRegistration(**data)
            customer.customer_registration = customer_registration_path
            customer.gst_certificate = gst_certificate_path
            customer.pan_card = pan_card_path
            customer.balance_sheet = balance_sheet_partnership_path
            customer.company_certificate = company_certificate_path
            customer.bank_statement = bank_statement_path
            customer.audited_financials = audited_financials_path
            customer.kyc_document = kyc_document_path
            customer.security_cheques = security_cheques_path
            customer.save()

            saved_files = {
                'Customer Registration': customer_registration_path,
                'Gst Certificate': gst_certificate_path,
                'Pan Card': pan_card_path,
                'Balance Sheet': balance_sheet_partnership_path,
                'Company Certificate': company_certificate_path,
                'Bank Statement': bank_statement_path,
                'Audited Financials': audited_financials_path,
                'Kyc Document': kyc_document_path,
                'Security Cheques': security_cheques_path,
            }

            return render(request, 'customTemp/success.html', {'files': saved_files, 'MEDIA_URL': settings.MEDIA_URL})

        except Exception as e:
            print(f"An error occurred: {e}")
            return render(request, 'customTemp/form.html', {'error': str(e)})

    return render(request, 'customTemp/form.html')
def download_customer_data(request, pk):
    customer = get_object_or_404(CustomerRegistration, pk=pk)

    # Create a ZIP file in memory
    zip_buffer = io.BytesIO()
    with zipfile.ZipFile(zip_buffer, 'w', zipfile.ZIP_DEFLATED) as zip_file:
        # Generate PDF of the customer detail page
        html_string = render_to_string('customTemp/customer_detail.html', {'customer': customer})
        html = HTML(string=html_string, base_url=request.build_absolute_uri())
        pdf_buffer = html.write_pdf()
        zip_file.writestr(f'customer_detail_{customer.company_name or customer.id}.pdf', pdf_buffer)

        # Add attached files to the ZIP file
        file_fields = [
            customer.printer_report,
            customer.gst_certificate,
            customer.pan_card,
            customer.balance_sheet,
            customer.company_certificate,
            customer.bank_statement,
            customer.audited_financials,
            customer.kyc_document,
            customer.security_cheques,
        ]
        for file_field in file_fields:
            if file_field:
                file_path = file_field.path
                file_name = os.path.basename(file_path)
                try:
                    with open(file_path, 'rb') as f:
                        zip_file.writestr(f'attachments/{file_name}', f.read())
                except FileNotFoundError:
                    print(f"Warning: File not found at {file_path}")

    # Prepare the HTTP response
    response = HttpResponse(zip_buffer.getvalue(), content_type='application/zip')
    response['Content-Disposition'] = f'attachment; filename="customer_data_{customer.company_name or customer.id}.zip"'

    return response
def customer_detail(request, pk):
    customer = get_object_or_404(CustomerRegistration, pk=pk)
    return render(request, 'customTemp/customer_detail.html', {'customer': customer})

def menu(request):
    return render(request,'customTemp/menu.html')
def user_login(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        user = authenticate(request, username=username, password=password)
        if user is not None:
            login(request, user)
            if user.is_superuser:
                return redirect('dashboard')  # redirect superusers
            else:
                messages.error(request, 'Invalid username or password.')    # redirect regular users
        else:
            messages.error(request, 'Invalid username or password.')
    return render(request, 'customTemp/login.html')



# Create your views here.
