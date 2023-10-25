from typing import Optional
from django.db import models
from django.contrib.auth.models import AbstractUser

# Create your models here.

class User(AbstractUser):
    pass

    def __str__(self):
        return self.username
    
class Course(models.Model):
    title = models.CharField(max_length=250, unique=True)
    sub_title = models.CharField(max_length=250)
    image = models.ImageField(upload_to='course', blank=True)
    description = models.TextField(blank=True)
    amount = models.DecimalField(max_digits=10, decimal_places=2)
    details = models.TextField()
    status = models.BooleanField()


    def __str__(self):
        return '{}'.format(self.title)