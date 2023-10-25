from django.http import HttpResponse, JsonResponse
from django.shortcuts import render
from django.shortcuts import render, redirect, get_object_or_404
from django.contrib import messages
from . models import Course
from django.core.paginator import Paginator, EmptyPage, InvalidPage
from django.db import IntegrityError
from django.contrib.auth import login,logout, authenticate,update_session_auth_hash
from django.contrib.auth.models import User

# Create your views here.
def login(request):
    if request.method == 'POST':
        username = request.POST["username"]
        password = request.POST["password"]
        try:
            user = authenticate(request, username=username, password=password)
            if user is not None:
                login(request, user)
                return redirect('shop:all_products')
            else:
                messages.error(request, "Invalid credentials")

        except Exception as e:
            messages.error(request, f"Authentication failed: {e}")
            return redirect('accounts:login')

        else:
            return redirect('accounts:index')
    return render(request,'login.html')


def index(request):
    return render(request,'index.html')

def profile(request):
    return render(request,'profile.html')

def change_password(request):
    if request.method == 'POST':
        current_password = request.POST["currentpassword"]
        new_password1 = request.POST["newpassword1"]
        new_password2 = request.POST["newpassword2"]
        print(current_password,new_password1,new_password2)
        user = authenticate(request, username=request.user.username, password=current_password)

        if user is not None:
            if new_password1 == new_password2:
                # user.set_password(new_password1)
                # user.save()
                # update_session_auth_hash(request, user)
                u = User.objects.get(username__exact=user)
                u.set_password('new password')
                u.save()
            
                messages.success(request, 'Your password was successfully updated.')
                return redirect('accounts:index') 
            else:
                messages.error(request, 'New passwords do not match.')
        else:
            messages.error(request, 'Incorrect current password.')

    return render(request, 'profile.html')


def logout_view(request):
    logout(request)
    return redirect('accounts:login')

def short_course_view(request):
    courses = Course.objects.all()
    paginator = Paginator(courses, 10)  # Display 10 courses per page
    page = request.GET.get('page')
    courses = paginator.get_page(page)
    return render(request, 'short-course-view.html', {'courses': courses})



def create_course(request):
    if request.method == 'POST':
        title = request.POST.get('title')
        subtitle = request.POST.get('subtitle')
        description = request.POST.get('description')
        amount = request.POST.get('amount')
        status = request.POST.get('status')
        image = request.FILES.get('image')

        if status == "true":
            status = True
        elif status == "false":
            status = False

        # Create a new Course instance and populate it with form data
        new_course = Course(
            title=title,
            sub_title=subtitle,
            description=description,
            amount=amount,
            status=status,
            image=image
        )

        # Save the instance to the database
        new_course.save()
        return JsonResponse({'success': True})
        return redirect('accounts:courseView') 

    return render(request, 'short-course-create.html')  # Replace 'your_template.html' with your template


