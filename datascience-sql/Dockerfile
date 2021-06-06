ARG BASE_CONTAINER=jupyter/datascience-notebook
FROM $BASE_CONTAINER

# Fix DL4006
SHELL ["/bin/bash", "-o", "pipefail", "-c"]

RUN pip install SQLAlchemy==1.3.24 dataframe_sql