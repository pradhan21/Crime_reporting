from django.contrib import admin
from .models import user, police_station, police
# Register your models here.

admin.site.register(user)
admin.site.register(police_station)
admin.site.register(police)