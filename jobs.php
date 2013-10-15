Jobs types:
- SMS - send SMS message(s)
- EMAIL - send email message(s)
- PDFGEN - pdf document generation

job_tbl
-------
- job_id
- owner_user_id
- job_type (SMS, EMAIL, PDFGEN)
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
