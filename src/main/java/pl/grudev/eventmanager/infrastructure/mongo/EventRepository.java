package pl.grudev.eventmanager.infrastructure.mongo;

import org.springframework.data.mongodb.repository.MongoRepository;
import pl.grudev.eventmanager.domain.Event;

import java.util.List;
import java.util.Optional;

public interface EventRepository extends MongoRepository<Event, String> {

    Optional<Event> findById(String id);

    List<Event> findAll();
}
