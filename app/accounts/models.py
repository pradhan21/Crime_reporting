from pickle import TRUE
from django.contrib.auth.models import User
from django.db import models
# Create your models here.
class user(models.Model):
    uid=models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='UID'),
    f_name=models.CharField(max_length=50,default='admin')
    l_name=models.CharField(max_length=50,default='admin')
    phone_no = models.CharField(max_length=10, default=00000)
    bio = models.TextField(max_length=500, blank=True)
    address = models.CharField(max_length=30, blank=True)
    username=models.CharField(max_length=100)
    password=models.CharField(max_length=100)
    c_password=models.CharField(max_length=100)
    birth_date = models.DateField(null=True, blank=True)
    date_created=models.DateTimeField(auto_now_add=True) 

    def __str__(self):
        return self.f_name


class police_station(models.Model):
    state=models.CharField(max_length=30, default='abc')
    address=models.CharField(max_length=30)
    name=models.CharField(max_length=100)
    contact=models.CharField(max_length=10)
    no_of_officers:models.CharField(max_length=100)

    def __str__(self) :
        return self.name

class police(models.Model):
    f_name=models.CharField(max_length=50,default='abc')
    l_name=models.CharField(max_length=50,default='efg')
    phone_no = models.CharField(max_length=10)
    designiation = models.CharField(max_length=30, )
    address = models.CharField(max_length=30, blank=True)
    username=models.CharField(max_length=100)
    password=models.CharField(max_length=100)
    c_password=models.CharField(max_length=100)
    state=models.CharField(max_length=30)
    s_id=models.ForeignKey(police_station, default=1,related_name='polices', on_delete=models.SET_DEFAULT)
    birth_date = models.DateField(null=True, blank=True)
    date_created=models.DateTimeField(auto_now_add=True) 

    def __str__(self) :
        return self.f_name


