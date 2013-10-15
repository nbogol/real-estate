Jobs types:
- SMS - send SMS message(s)
- VOICE - send voice message
- EMAIL - send email message(s)
- PDFGEN - pdf document generation
- ALERT - generate alert (new listing, ...)
- ALARM - email notification message on alarm event

job_tbl
-------
- job_id
- owner_user_id
- job_type (SMS, VOICE, EMAIL, PDFGEN, ALERT, ALARM)
- status (NEW,ACTIVE,COMPLETE,ERROR)
- schedule (ONE_TIME, REPEAT, ... ?)
- priority
- enrty_time
- start_time
- compelte_time
- on_start (<yii component name>.<method>(job_id))
- on_complete (<yii component name>.<method>(job_id))
- on_error (<yii component name>.<method>(job_id))

job_pdfgen_detail_tbl
---------------------
- job_detail_id
- job_id
