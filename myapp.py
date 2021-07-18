import streamlit as st 
import codecs
file = codecs.open("index.html", "r", "utf-8")
# print(file.read())

st.markdown(file.read(), unsafe_allow_html=True)
