from . import views
from django.urls import path

app_name='accounts'

urlpatterns = [
    path('',views.login , name='login'),
    path('index/',views.index , name='index'),
    path('profile',views.profile , name='profile'),
    path('changepassword/',views.change_password , name='changePassword'),
    path('logout/',views.logout_view , name='logout'),
    path('short_course_view/',views.short_course_view , name='courseView'),
    path('create_course/', views.create_course, name='createCourse'),
    
]
