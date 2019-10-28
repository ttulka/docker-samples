FROM alpine

COPY setup.sh /
COPY start.sh /

RUN chmod +x /setup.sh && chmod +x /start.sh

ENTRYPOINT ["/setup.sh"]
CMD ["/start.sh"]