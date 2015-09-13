from django.db import models


class News(models.Model):
    author = models.TextField()
    created = models.DateTimeField(auto_now_add=True)
    title = models.TextField()
    synopsis = models.TextField()
    content = models.TextField()
    picture = models.ImageField(upload_to='info/%Y/%m/%d')
    is_approved = models.BooleanField(default=False)

    class Meta:
        ordering = ['-created']

    def __unicode__(self):
        return '({}) {}'.format(self.id, self.title)