package pl.grudev.eventmanager.application;

import org.springframework.stereotype.Service;
import pl.grudev.eventmanager.api.EventEndpoint;
import pl.grudev.eventmanager.domain.Event;
import pl.grudev.eventmanager.infrastructure.mongo.EventRepository;

import java.util.List;

@Service
public class EventService implements EventEndpoint {

    private final EventRepository eventRepository;

    public EventService(EventRepository eventRepository) {
        this.eventRepository = eventRepository;
    }

    public Event getEvent(String id) {
        return eventRepository.findById(id).orElse(null);
    }

    @Override
    public List<Event> getEvents() {
        return eventRepository.findAll();
    }
}
