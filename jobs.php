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
- status_notes
- schedule (ONE_TIME, REPEAT, ... ?)
- priority
- enrty_time
- start_time
- compelte_time
- on_start (<yii component name>.<method>(job_id))
- on_complete (<yii component name>.<method>(job_id))
- on_error (<yii component name>.<method>(job_id))


job_detail_pdf_doc_tbl
----------------------
job_detail_id
job_id
doc_set_code
doc_code
status - NEW, ACTIVE (in process), DONE, ERROR
status_notes
complete_time

job_detail_pdf_doc_param_tbl
----------------------------
job_detail_param_id
job_detail_id
data_provider
pname
pval


Forms:
=================
CLIENT
AGENT
LAWYER

OFFICE
DEAL



re_deal_tbl
------------
re_deal_id
owner_user_id
tran_dir // BUY or SELL or RENT
property_id
client_id
agent_id
lawyer_id
counter_client_id
counter_agent_id
counter_lawyer_id
deal_status

