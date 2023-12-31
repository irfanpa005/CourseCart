# Generated by Django 4.2.6 on 2023-10-25 09:45

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('accounts', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Course',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=250, unique=True)),
                ('sub_title', models.CharField(max_length=250)),
                ('image', models.ImageField(blank=True, upload_to='course')),
                ('description', models.TextField(blank=True)),
                ('amount', models.DecimalField(decimal_places=2, max_digits=10)),
                ('details', models.TextField()),
                ('status', models.BooleanField()),
            ],
        ),
    ]
