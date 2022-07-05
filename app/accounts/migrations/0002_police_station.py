# Generated by Django 4.0.4 on 2022-06-26 11:00

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('accounts', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='police_station',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('state', models.CharField(default='abc', max_length=30)),
                ('address', models.CharField(max_length=30)),
                ('name', models.CharField(max_length=100)),
                ('contact', models.CharField(max_length=10)),
            ],
        ),
    ]